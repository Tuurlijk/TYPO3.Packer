VERSION=$(shell jq -r .variables.version Alpine.json)
PACKER_KEY_INTERVAL=7ms
export PACKER_KEY_INTERVAL
build:
	packer build --force Alpine.json
	ls -hl box/virtualbox/Alpine-${VERSION}.box
	vagrant box add --force Alpine-Test box/virtualbox/Alpine-${VERSION}.box

clean:
	rm -rf output-virtualbox-iso

add:
	vagrant box add --force Alpine-Test box/virtualbox/Alpine-${VERSION}.box
