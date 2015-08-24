<h2 class="vt1">Install</h2>
<h3>Download</h3>
<ul>
	<li><a href="http://www.vagrantup.com/downloads.html" target="_blank">Download
			Vagrant</a> installer for your operating system.
	
	<li><a href="https://www.virtualbox.org/wiki/Downloads" target="_blank">Download
			VirtualBox</a> installer for your operating system.

</ul>
<h3>Building a vagrant box from start to finish</h3>
<p>
	With some simple commands you will setup your first vagrant
	environment. As example below, I will setup 1 vagrant env. with box
	<code>"chef/ubuntu-14.04"</code>
</p>
<ul>
	<li>Open Terminal in your folder
	
	<li>Init env. <code>vagrant init chef/ubuntu-14.04; </code>
	
	<li>Run it <code>vagrant up --provider virtualbox</code>
	
	<li>Login SSH <code>vagrant ssh</code>

</ul>
<h3>Examples</h3>
<h4>Getting Started with Vagrant on OSX 10.10 Yosemite</h4>
<ul>
	<li>vagrant init
	
	<li>vagrant box add chef/centos-6.5
	
	<li>nano Vagrantfile <pre>
config.vm.box = "chef/centos-6.5"
config.vm.provision :shell, path: "bootstrap.sh"

config.vm.network "forwarded_port", guest: 80, host: 8080
</pre>
	</li>
	<li>vagrant up
	
	<li>return working folder and type <code>nano bootstrap.sh</code> <pre>
#!/usr/bin/env bash

yum update
yum -y install httpd
rm -rf /var/www/html
ln -fs /vagrant /var/www/html
service httpd start
</pre>
	</li>

	<li>vagrant reload --provision
	
	<li>vagrant ssh then <code>sudo yum -y install nano</code>

</ul>
<p>Run this link http://127.0.0.1:8080 to preview result</p>