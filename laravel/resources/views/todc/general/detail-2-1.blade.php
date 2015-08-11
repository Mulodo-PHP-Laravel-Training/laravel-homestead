<h3 id="g2-1">Installation of Vagrant and Virtual Box</h3>
<p>You only do these steps before installing Laravel Homestead</p>
<ol>
	<li>Download Virtual Box (https://www.virtualbox.org/wiki/Downloads)
	
	<li>Download Vagrant (http://www.vagrantup.com/downloads.html)
	
	<li>Install both Virtual Box and Vagrant
	
	<li>open TERMINAL
	
	<li>Test that Vagrant is installed properly, type: <code>vagrant -v</code>.
		If you get <code>"Vagrant 1.7.4"</code> followed by a version number
		you are set, it means you install Vagrant successfully.
	
	<li>Type <code>vagrant box add laravel/homestead</code> to add laravel
		homestead into Virtual Box. After that you must choose 1 or 2 for
		working. See example below: <pre>
		vagrant box add laravel/homestead
==> box: Loading metadata for box 'laravel/homestead'
box: URL: https://atlas.hashicorp.com/laravel/homestead
This box can work with multiple providers! The providers that it
can work with are listed below. Please review the list and choose
the provider you will be working with.

1) virtualbox
2) vmware_desktop

Enter your choice: 1
	</pre>
		<p>If you install successfully, you will see results as below</p> <pre>
	==> box: Adding box 'laravel/homestead' (v0.2.7) for provider: virtualbox
Name: laravel/homestead
Provider: virtualbox
Version: 0.2.7
	</pre>
	</li>
	<li>Type <code>sudo nano ~/.bash_profile</code> to add settings: <pre>
################################
# Adding Homestead PATH
################################

export HOMESTEAD_PATH=~/.composer/vendor/bin
export PATH=$HOMESTEAD_PATH:$PATH
	</pre>
	</li>
	<li>Type <code>composer global require "laravel/homestead=~2.0"</code>
		<pre>
	composer global require "laravel/homestead=~2.0"
	Changed current directory to /Users/user/.composer
./composer.json has been updated
Loading composer repositories with package information
Updating dependencies (including require-dev)
Nothing to install or update
Generating autoload files
	</pre>
	
	<li>Type <code>homestead</code> to check settings and available
		commands <pre>
Laravel Homestead version 2.1.5

Usage:
  command [options] [arguments]

Options:
  -h, --help            Display this help message
  -q, --quiet           Do not output any message
  -V, --version         Display this application version
      --ansi            Force ANSI output
      --no-ansi         Disable ANSI output
  -n, --no-interaction  Do not ask any interactive question
  -v|vv|vvv, --verbose  Increase the verbosity of messages: 1 for normal output, 2 for more verbose output and 3 for debug

Available commands:
  destroy    Destroy the Homestead machine
  edit       Edit the Homestead.yaml file
  halt       Halt the Homestead machine
  help       Displays help for a command
  init       Create a stub Homestead.yaml file
  list       Lists commands
  make       Install Homestead into the current project
  provision  Re-provisions the Homestead machine
  resume     Resume the suspended Homestead machine
  run        Run commands through the Homestead machine via SSH
  ssh        Login to the Homestead machine via SSH
  status     Get the status of the Homestead machine
  suspend    Suspend the Homestead machine
  up         Start the Homestead machine
  update     Update the Homestead machine image
</pre>
	
	<li>Setting Your SSH Key <pre>
ssh-keygen -t rsa -C "you@homestead"
</pre>
	</li>
	<li>Type <code>sudo nano ~/.homestead/Homestead.yaml</code> to add/edit
		settings <pre>

---
ip: "192.168.10.10"
memory: 2048
cpus: 1
provider: virtualbox

authorize: ~/.ssh/id_rsa.pub

keys:
    - ~/.ssh/id_rsa

folders:
    - map: /Applications/AMPPS/www/2015/laravel/Homestead/Homestead/
      to: /home/vagrant/Code
      type: "nfs"

sites:
    - map: homestead.app
      to: /home/vagrant/Code/laravel/public
    - map: vytien.homestead.app
      to: /home/vagrant/Code/laravel/public

databases:
    - homestead

variables:
    - key: APP_ENV
      value: local

# blackfire:
#     - id: foo
#       token: bar
#       client-id: foo
#       client-token: bar

# ports:
#     - send: 93000
#       to: 9300
#     - send: 7777
#       to: 777
#       protocol: udp
</pre>
	</li>
</ol>
<hr>
<h3 id="g2-2">Installation of phpMyAdmin</h3>
<ul>
	<li>Download <a href="http://www.phpmyadmin.net/home_page/index.php"
		target="_blank">phpMyAdmin</a> then unzip it into your code directory.
		In here I place it into <code>/Applications/AMPPS/www/2015/laravel/Homestead/Homestead/phpMyAdmin</code>
	
	<li>open TERMINAL and type <code>sudo nano ~/.homestead/Homestead.yaml</code>,
		then adding mapping folder and site for phpMyAdmin. <pre>
	folders:
    - map: /Applications/AMPPS/www/2015/laravel/Homestead/Homestead/
      to: /home/vagrant/Code
      type: "nfs"
    - map: /Applications/AMPPS/www/2015/laravel/Homestead/Homestead/phpMyAdmin
      to: /home/vagrant/Code/phpMyAdmin

sites:
    - map: homestead.app
      to: /home/vagrant/Code/laravel/public
    - map: vytien.homestead.app
      to: /home/vagrant/Code/laravel/public
    - map: phpMyAdmin.app
      to: /home/vagrant/Code/phpMyAdmin
	
	</pre>
	</li>
	<li>Go to Finder and add line <code>127.0.0.1 phpMyAdmin.app</code>
		into '/private/etc/hosts'
	
	<li>Run <a href="http://phpmyadmin.app:8000/" target="_blank">link</a>
		to access phpMyAdmin
	
	<li>Default account: <code>homestead/secret</code>

</ul>
<hr>