# look-route-nova

To list route in resource laravel nova 3

Install Package via Composer:
composer require riza/look-route

Then, add this tool in NovaServiceProvider.php like this in method tools():
public function tools()
{
return [
new LookRoute
];
}
