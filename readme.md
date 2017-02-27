<p align="center"><a href="https://ipaddress.fyi"><img src="https://ipaddress.fyi/img/ipaddress-logo.svg"></a></p>

## About this project

This free service is intended for developers and system administrators to simplify the  management of access control for their own apps and systems. [IPaddress.fyi](https://ipaddress.fyi) organizes network data into a freely accessible JSON formatted data. Developers and system administrators can easily reference the same URL with their application. If the IP Address of a service changes, we'll make the changes for you -- but you won't have to update the references of your application or firewall. The JSON URL will always stay the same!

## How To use
[IPaddress.fyi](https://ipaddress.fyi) is so easy to use, even your grandmother will know how to use it:

1. Visit [https://ipaddress.fyi](https://ipaddress.fyi)
2. Select the service(s) of your choice
3. Click "Show My Integration URL"
4. Copy the link and integrate this data with your application/firewall. Our URL will never change, but we will always keep the information up to date for you.

## Contributing

We've open sourced the entire code so that we can all work together to make a beautiful and organized set of network data.

### Reporting and issue or inaccuracy
If you find a problem, [create an issue](https://github.com/521dimensions/ipaddress-fyi/issues/new).

### Adding a service
To add a service, you will need to submit a pull request. To do this, you will need to create a new `.json` file under `/public/services`.

Each service requires:
1. `name`: The name of the service
2. `category`: How this service should be categorized on the homepage
3. `source`: A trusted URL where you got this information from
4. `command`: What Bash command to run in order to make sure the data stays up to date
5. If you cannot get the information through a command, then `addresses` is required. This should be a list of addresses that are verified to be related to the service. In a perfect world, we will want to use the `command` field to update data as much as possible so that we can guarantee changes can be updated without human interaction.

See the files under `/public/services` to see the examples that we already have.

## Running your own server
If you prefer to run your own server, you will need a working PHP and MySQL environment. This is a Laravel PHP application, so after you clone it to your server of choice, you will need to install the packages using `npm install` and `composer install` from root directory of our repository. You'll need to properly configure your `.env` file and make sure that your application key is properly set within that file.

## Manually updating addresses
If you want to update the addresses manually, we created a command to do so:
```
cd /path/to/the/repo/
php artisan update:ipaddresses all
```

## Automating address updates
Use `cron` to automate the updates. To do this, run `crontab -e` and then add these lines:

```
#ipaddress.fyi address updates
* * * * * /usr/bin/php /path/to/the/repo/artisan schedule:run >> /dev/null 2>&1
```
Important notes when configuring `cron`:
- Make sure you configure the correct location to `artisan` by replacing `/pat/to/my/repo` to be the correct location of where you are running the application.
- The script above will check every minute to see if it should run (using the Laravel Scheduler). But the address update function will only run once per day at 5 AM GMT.

## License

The Laravel framework is open-sourced software licensed under the [MIT license](http://opensource.org/licenses/MIT).
