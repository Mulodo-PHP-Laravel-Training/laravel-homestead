<h2>Auto-running commands</h2>
<p>There are two ways we can use SSH provisioning. We can either directly run a
command from our Vagrantfile file with the following line:</p>
<pre>
config.vm.provision :shell, :inline => "sudo apt-get update"
</pre>
<p>run a particular shell script (the location of the
script specified is relative to our project root, that is, /vagrant):</p>
<pre>config.vm.provision :shell, :path => "provision.sh"</pre>