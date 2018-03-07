VERSION=$(shell jq -r .variables.version Alpine.json)

build:
	packer build --force Alpine.json
	vagrant box add --force Alpine-Test box/virtualbox/Alpine-${VERSION}.box

clean:
	rm -rf output-virtualbox-iso

add:
	vagrant box add --force Alpine-Test box/virtualbox/Alpine-${VERSION}.box
