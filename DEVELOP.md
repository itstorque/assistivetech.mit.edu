# Developing for the Website

## Setup

Install an [Apache | Nginx] WebServer solution that supports PHP, such as [MAMP](https://www.mamp.info/en/) for development.

## Workflow

1. Make changes in the respective branch*.

2. Push changes to GitHub.

3. Create a Pull Request and Merge with Master.

3. Go to the [Website Admin Portal](https://assistivetech.scripts.mit.edu/admin) to pull changes from GitHub **Master Branch** onto the live server.

#### **NOTE: Never Push To Master Directly!*

## Hosting

The server runs on [scripts](https://scripts.mit.edu/), a service provided by [MIT SIPB](https://sipb.mit.edu/). All the files are present in the [Athena Locker](https://ist.mit.edu/lockers) associated with the Assistive Technology Group at MIT.

## Admin Portal

The admin portal uses Kerberos Authentication, only the owners of the Athena Locker can access this webpage. The portal requires certificates to be installed and the use of https. Since the server has no SSL certificates for the main page, you can access the portal at [https://assistivetech.scripts.mit.edu/admin](https://assistivetech.scripts.mit.edu/admin) instead of the regular link.

By default, admins are redirected to an HTTPS connection on port 444, which is configured to accept certificates. If the user has no certificates, they will be presented with an error page. 

During development, you can access the page as you normally would (without certificates) if it's hosted on [127.0.0.1](127.0.0.1).

## Requirements

### PHP Extensions

Even though scripts supports the JSON PHP package, it isn't enabled by default. To use any such package that needs enabling, add the requirement with `extension = [extension name].so` into the `php.ini` file (the file should be in the directory of the PHP file using that extension).

Visit [enabling php extensions in scripts](https://scripts.mit.edu/faq/64/how-do-i-enable-additional-php-extensions) for more details.


