# Ion Auth 2
### The future of authentication
by [Ben Edmunds](http://benedmunds.com)

Redux Auth 2 had a lot of potential.  It's lightweight, simple, and clean,
but had a ton of bugs and was missing some key features.  So we refactored
the code and added new features.

This version drops any backwards compatibility and makes things even more
awesome than you could expect.


## Documentation
Documentation is located at http://benedmunds.com/ion_auth/

## Installation
There are 2 ways to install this package.

> 1. Move files from this package to the corresponding folder structure:

```shell
CI                          # → Root Directory
└── application/
    ├── config/
    │   └── ion_auth.php
    ├── controllers/
    │   └── Auth.php
    ├── libraries
    │   ├── Bcrypt.php
    │   └── Ion_auth.php
    ├── models
    │   └── Ion_auth_model.php
    └── views/
        └── auth/           # → Various view files
```
---

> 2. Move files from this package to the corresponding **third_party** structure:

```shell
CI                          # → Root Directory
└── application/
    ├── controllers/
    │   └── Auth.php
    ├── third_party/
    │   └── ion_auth/
    │       ├── config/
    │       │   └── ion_auth.php
    │       ├── libraries
    │       │    ├── Bcrypt.php
    │       │    └── Ion_auth.php
    │       └── models
    │            └── Ion_auth_model.php
    └── views/
        └── auth/           # → Various view files
```

Then in your controller, example `Auth.php` add the package path and load the library like normal

	$this->load->add_package_path(APPPATH.'third_party/ion_auth/');
	$this->load->library('ion_auth’);

Or autoload by adding the following to application/config/autoload.php

	$autoload['packages'] = array(APPPATH.'third_party/ion_auth');


---

### CodeIgniter Version 2 Compatibility
CodeIgniter v2 requires the class file names to be lowercase.  In order to support this follow the standard installation procedures and then either rename the following files or create symlinks

	models/Ion_auth_model.php         =>   models/ion_auth_model.php
	controllers/Auth.php              =>   controllers/auth.php

### Relational DB Setup
Then just run the appropriate SQL file (if you're using migrations you can
get the migrations from JD here:
https://github.com/iamfiscus/codeigniter-ion-auth-migration).

## Usage
In the package you will find example usage code in the controllers and views
folders.  The example code isn't the most beautiful code you'll ever see but
it'll show you how to use the library and it's nice and generic so it doesn't
require a MY_controller or anything else.

### Default Login
Username: admin@admin.com
Password: password


### Important
It is highly recommended that you use encrypted database sessions for security!


### Optimization
It is recommended that you add your identity column as a unique index.


### Options
Time Based One-Time Password (TOTP) -
There is a Time Based One-Time Password (TOTP) implementation compatible with Google Authenticator available. Feature branch maintained by [biscofil](https://github.com/biscofil) and is available at [https://github.com/benedmunds/CodeIgniter-Ion-Auth/tree/otp](https://github.com/benedmunds/CodeIgniter-Ion-Auth/tree/otp)



## Support
If you think you've found a bug please [Create an Issue](https://github.com/benedmunds/CodeIgniter-Ion-Auth/issues).

If you need a customization or help implementing Ion Auth into your project please [Email Me for Consulting Information](mailto:ionauth_consulting@benedmunds.com).

If your company would like a support contract or service agreement please [Reach Out](mailto:ionauth_support_contract@benedmunds.com) to discuss available options.


## For Help
If you're having an issue with CodeIgniter or for general help with development I recommend checking out the [CodeIgniter Forums](http://forum.codeigniter.com).

If you think you've found a bug please [Create an Issue](https://github.com/benedmunds/CodeIgniter-Ion-Auth/issues).


Thanks,
-Ben Edmunds 
 [benedmunds.com](http://benedmunds.com)  
 [@benedmunds](http://twitter.com/benedmunds)
