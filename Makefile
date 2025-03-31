.PHONY : main build-image build-container start test shell stop clean
main: build-image build-container

build-image:
	docker build -t string-calculator-kata .

build-container:
	docker run -dt --name string-calculator-kata -v .:/540/StringCalculatorPHP string-calculator-kata
	docker exec string-calculator-kata composer install

start:
	docker start string-calculator-kata

test: start
	docker exec string-calculator-kata ./vendor/bin/phpunit tests/$(target)

shell: start
	docker exec -it string-calculator-kata /bin/bash

stop:
	docker stop string-calculator-kata

clean: stop
	docker rm string-calculator-kata
	rm -rf vendor
