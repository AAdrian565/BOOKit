all: run

run:
	@npm run build
	@php artisan serve
