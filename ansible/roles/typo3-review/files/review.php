<?php
/**
 * Created by PhpStorm.
 * User: Michael Oehlhof
 * Date: 11.10.15
 * Time: 14:17
 */

//ini_set('max_execution_time', 0);
//ini_set('implicit_flush', 1);
//ob_implicit_flush(1);
initOutput();

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
	case 'unittest-master':
		doUnitTest('dev-master');
		break;
	case 'unittest-review':
		doUnitTest('review');
		break;
	default:
}
echo '<br /><br /><a href="index.php">Back to start page</a> ';


function initOutput()
{
	ini_set('max_execution_time', 0);

	// Turn off output buffering
	ini_set('output_buffering', 'off');
	// Turn off PHP output compression
	ini_set('zlib.output_compression', false);

	//Flush (send) the output buffer and turn off output buffering
	//ob_end_flush();
	while (@ob_end_flush());

	// Implicitly flush the buffer(s)
	ini_set('implicit_flush', true);
	ob_implicit_flush(true);

	// Clear, and turn off output buffering
	while (ob_get_level() > 0) {
		// Get the current level
		$level = ob_get_level();
		// End the buffering
		ob_end_clean();
		// If the current level has not changed, abort
		if (ob_get_level() == $level) break;
	}
	// Disable apache output buffering/compression
	if (function_exists('apache_setenv')) {
		apache_setenv('no-gzip', '1');
		apache_setenv('dont-vary', '1');
	}

	//prevent apache from buffering it for deflate/gzip
	header("Content-type: text/html\r\n");
	header("Cache-Control: no-cache\r\n");
//	header("Content-Encoding: none\r\n");
	header("X-Accel-Buffering: no\r\n");

	for($i = 0; $i < 1000; $i++)
	{
		echo ' ';
	}

	@ ob_flush();
	@ flush();
}

function showForm()
{
	echo '<h2>TYPO3 Review system</h2>';
	@ my_flush();
}

function doUpdate()
{
	doReset();
	echo '<br /><b>Update dev-master.local.typo3.org</b><br />';
	my_flush();
	chdir('/var/www/dev-master.local.typo3.org/typo3_src');
	liveExecuteCommand('git pull origin master');
	echo '<br /><b>Update review.local.typo3.org</b><br />';
	my_flush();
	chdir('/var/www/review.local.typo3.org/typo3_src');
	liveExecuteCommand('git pull origin master');
	my_flush();
}

function doReset()
{
	echo '<br /><b>Reset dev-master.local.typo3.org</b><br />';
	my_flush();
	chdir('/var/www/dev-master.local.typo3.org/typo3_src');
	liveExecuteCommand('git reset --hard origin/master');
	my_flush();
	chdir('/var/www/dev-master.local.typo3.org');
	liveExecuteCommand('/var/www/dev-master.local.typo3.org/typo3cms cache:flush');
	echo '<br /><b>Reset review.local.typo3.org</b><br />';
	my_flush();
	chdir('/var/www/review.local.typo3.org/typo3_src');
	liveExecuteCommand('git reset --hard origin/master');
	my_flush();
	chdir('/var/www/review.local.typo3.org');
	liveExecuteCommand('/var/www/review.local.typo3.org/typo3cms cache:flush');
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
	liveExecuteCommand($parameter);
	my_flush();
}

function doUnitTest($site)
{
	echo '<br /><b>Unit tests on ' . $site . '.local.typo3.org</b><br />';
	my_flush();
	chdir('/var/www/' . $site . '.local.typo3.org');
	$phpUnitCommand = './bin/phpunit -c typo3_src/typo3/sysext/core/Build/UnitTests.xml';
	liveExecuteCommand($phpUnitCommand);
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
	@ob_flush();
	@flush();
}

function liveExecuteCommand($cmd)
{
	echo "<pre>";

	while (@ ob_end_flush()) {
		;
	} // end all output buffers if any

//	$process = popen("$cmd 2>&1 ; echo Exit status : $?", 'r');
	$process = popen("$cmd 2>&1", 'r');

	$complete_output = "";

	while (!feof($process)) {
		$live_output = fread($process, 100);
		$complete_output = $complete_output . $live_output;
		$live_output = colorize(str_replace(chr(10), '<br />', $live_output));
		echo "$live_output";
		@ ob_flush();
		@ flush();
	}

	pclose($process);

	// get exit status
	preg_match('/[0-9]+$/', $complete_output, $matches);

	echo "</pre>";

	// return exit status and intended output
	if (isset($matches[0])) {
		return array(
			'exit_status' => $matches[0],
			'output' => str_replace("Exit status : " . $matches[0], '', $complete_output)
		);
	}
}

/**
 * Colorizes a shell output using HTML markers.
 *
 * @param string $output Shell output
 * @return string Colorized shell output
 */
function colorize($output)
{
	// Shell colors
	$ESC_SEQ = '/[\x00-\x1F\x7F]\[';
	$COL_BLACK = $ESC_SEQ . '30(;01)?m/';
	$COL_RED = $ESC_SEQ . '31(;01)?m/';
	$COL_GREEN = $ESC_SEQ . '32(;01)?m/';
	$COL_YELLOW = $ESC_SEQ . '33(;01)?m/';
	$COL_BLUE = $ESC_SEQ . '34(;01)?m/';
	$COL_MAGENTA = $ESC_SEQ . '35(;01)?m/';
	$COL_CYAN = $ESC_SEQ . '36(;01)?m/';
	$COL_GRAY = $ESC_SEQ . '37(;01)?m/';
	$COL_RESET = $ESC_SEQ . '39;49;00m/';

	$mapping = array(
		$COL_BLACK => '<span style="color:#000000">',
		$COL_RED => '<span style="color:#dc143c">',
		$COL_GREEN => '<span style="color:#228B22">',
		$COL_YELLOW => '<span style="color:#ffd700">',
		$COL_BLUE => '<span style="color:#6495ed">',
		$COL_MAGENTA => '<span style="color:#ba55d3">',
		$COL_CYAN => '<span style="color:#00ffff">',
		$COL_GRAY => '<span style="color:#a9a9a9">',
		$COL_RESET => '</span>',
	);
	$output = preg_replace($ESC_SEQ . '01m/', '<span>', $output);
	foreach ($mapping as $pattern => $html) {
		$output = preg_replace($pattern, $html, $output);
	}

	return $output;
}