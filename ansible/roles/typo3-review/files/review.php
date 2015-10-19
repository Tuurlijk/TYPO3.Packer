<?php
/**
 * Created by PhpStorm.
 * User: michaeloehlhof
 * Date: 11.10.15
 * Time: 14:17
 */

ini_set('max_execution_time', 0);
ini_set('implicit_flush', 1);
ob_implicit_flush(1);

// Get the POST parameter and execute the appropriate action
$cmd = $_POST['cmd'];
$parameter = $_POST['parameter'];

showForm();

switch ($cmd) {
	case 'update':
		doUpdate();
		break;
	case 'reset':
		doReset();
		break;
	case 'review':
		doReview($parameter);
		break;
	default:
}
echo '<br /><br /><a href="index.php">Back to start page</a> ';


function showForm()
{
	echo '<h2>TYPO3 Review system</h2>';
	my_flush();
}

function doUpdate()
{
	doReset();
	echo '<br /><b>Update dev-master.local.typo3.org</b><br />';
	my_flush();
	chdir('/var/www/dev-master.local.typo3.org/typo3_src');
	$out = executeCommand('git pull origin master');
	echo str_replace(chr(10), '<br />', $out) . '<br />';
	echo '<br /><b>Update review.local.typo3.org</b><br />';
	my_flush();
	chdir('/var/www/review.local.typo3.org/typo3_src');
	$out = executeCommand('git pull origin master');
	echo str_replace(chr(10), '<br />', $out) . '<br />';
	my_flush();
}

function doReset()
{
	echo '<br /><b>Reset dev-master.local.typo3.org</b><br />';
	my_flush();
	chdir('/var/www/dev-master.local.typo3.org/typo3_src');
	$out = executeCommand('git reset --hard origin/master');
	echo str_replace(chr(10), '<br />', $out) . '<br />';
	my_flush();
	chdir('/var/www/dev-master.local.typo3.org');
	$out = executeCommand('/var/www/dev-master.local.typo3.org/typo3cms cache:flush');
	echo str_replace(chr(10), '<br />', $out) . '<br />';
	echo '<br /><b>Reset review.local.typo3.org</b><br />';
	my_flush();
	chdir('/var/www/review.local.typo3.org/typo3_src');
	$out = executeCommand('git reset --hard origin/master');
	echo str_replace(chr(10), '<br />', $out) . '<br />';
	my_flush();
	chdir('/var/www/review.local.typo3.org');
	$out = executeCommand('/var/www/review.local.typo3.org/typo3cms cache:flush');
	echo str_replace(chr(10), '<br />', $out) . '<br />';
	my_flush();
}

function doReview($parameter)
{
	doReset();
	echo '<br /><b>Review on review.local.typo3.org</b><br />';
	my_flush();
	chdir('/var/www/review.local.typo3.org/typo3_src');
	// Check if git user is set
	$user = executeCommand('git config --get user.name');
	if (empty($user)) {
		$user = executeCommand('git config user.name vagrant');
		$user = executeCommand('git config user.email vagrant@localhost');
		echo str_replace(chr(10), '<br />', 'Setting first time user') . '<br /><br /><br />';
	}
	// Check if parameter contains ssh access
    // git fetch http://review.typo3.org/Packages/TYPO3.CMS refs/changes/68/43868/11 && git cherry-pick FETCH_HEAD
    // git fetch ssh://michadu@review.typo3.org:29418/Packages/TYPO3.CMS refs/changes/68/43868/11 && git cherry-pick FETCH_HEAD
    if (substr($parameter, 0, 14) == 'git fetch ssh:') {
		$cherry = substr($parameter, strpos($parameter, 'Packages'));
		$parameter = 'git fetch http://review.typo3.org/' . $cherry;
	}
	$out = executeCommand($parameter);
	echo str_replace(chr(10), '<br />', $out) . '<br />';
	my_flush();
}

function executeCommand($command)
{
	$output = '';
	$io = array();
	$p = proc_open($command,
		array(1 => array('pipe', 'w'),
			2 => array('pipe', 'w')),
		$io);

	/* Read output sent to stdout. */
	while (!feof($io[1])) {
		$output .= htmlspecialchars(fgets($io[1]),
			ENT_COMPAT, 'UTF-8');
	}
	/* Read output sent to stderr. */
	while (!feof($io[2])) {
		$output .= htmlspecialchars(fgets($io[2]),
			ENT_COMPAT, 'UTF-8');
	}

	fclose($io[1]);
	fclose($io[2]);
	proc_close($p);

	return $output;
}

function my_flush() {
	for ($i=0;$i<10000;$i++) echo ' ';
	ob_flush();
	flush();
}