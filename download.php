<?php
include_once 'app.php';
include_once 'navbar.php';
?>

<!DOCTYPE html>
<html>
<?php htmlHeader('Download')?>
<body>
  <?php navHeader('download')?>
  <div class="jumbotron text-center">
    <div class="container">
      <h1>Download</h1>
      <div class="text-center mt30">
        <div class="d-inline-block">
          <a href="https://github.com/capp-esystem/capp/archive/master.zip" type="button" class="btn btn-info btn-lg">Download</a><br/>
          <small>
            <cite>
              <a href="https://github.com/capp-esystem/capp" target="_blank">GitHub</a>
            </cite>
          </small>
        </div>
        <div class="d-inline-block">
          <a href="https://drive.google.com/file/d/1Xms0R7qmCPnTgnUo7t63zJTPqPbUEJ-Q/view?usp=sharing" type="button" class="btn btn-success btn-lg" target="_blank">Virtual Disk Image</a><br/>
          <small><cite>OVA (1.65GB)</cite></small>
        </div>
      </div>
    </div>
  </div>
  <div class="container">
    <section>
      <div class="page-header">
        <h2>CAPP Install Guide</h2>
      </div>
      <div class="d-inline-block alert alert-danger">
        It is recommended to let network administrators to deploy the system for production as they are professionals with the knowledge of security settings.<br/>
        If you want to give it a test drive, you are recommended to use the virtual disk image.
      </div>
    </section>
    <section>
      <h3>0. System Requirements</h3>
      <h4>0.1 Server Requirements</h4>
      <dl class="dl-horizontal">
        <dt>OS</dt>
        <dd>Windows 7/8/10 64bit, Mac OS X 64bit, Linux 64bit</dd>
        <dt>Processor</dt>
        <dd>Intel Core i3 or above</dd>
        <dt>RAM</dt>
        <dd>4GB or larger</dd>
        <dt>Storage</dt>
        <dd>5GB or bigger</dd>
        <dt>Software</dt>
        <dd>7-Zip / WinRAR</dd>
      </dl>
      <h4>0.2 Teacher(Admin) requirements</h4>
      <dl class="dl-horizontal">
        <dt>PC/Mac</dt>
        <dd>Google Chrome <strong>only</strong></dd>
      </dl>
      <h4>0.3 Students(Clients) requirements</h4>
      <dl class="dl-horizontal">
        <dt>PC/Mac</dt>
        <dd>IE11/above, Firefox, Google Chrome and Safari</dd>
        <dt>iPhone</dt>
        <dd>iOS 11/above</dd>
        <dt>Android</dt>
        <dd>Chrome</dd>
      </dl>
      <h4>0.4 Virtual machine requirements</h4>
      <dl class="dl-horizontal">
        <dt>OS</dt>
        <dd>Windows 7/8/10 64bit, Mac OS X 64bit, Linux 64bit</dd>
        <dt>Processor</dt>
        <dd>Intel Core i3 or above</dd>
        <dt>RAM</dt>
        <dd>8GB or larger</dd>
        <dt>Storage</dt>
        <dd>5GB or bigger</dd>
        <dt>Software</dt>
        <dd>7-Zip / WinRAR</dd>
      </dl>
    </section>
    <section>
      <h3>1. Installing Oracle Virtualbox</h3>
      <p>
        This virtual machine image requires Oracle Virtualbox to execute, please go to <a href="https://www.virtualbox.org/">the main site of Virtualbox</a> to download
        the latest version of Virtualbox and visit <a href="https://www.virtualbox.org/manual/ch02.html">here</a> to learn how to install it on your
        computer
      </p>
    </section>
    <section>
      <h3>2. Setting up the virtual machine</h3>
      <ol>
        <li>Download the ova file, it is referenced as <code>CAPP.ova</code> in the following.</li>
        <li>Start the Oracle Virtualbox</li>
        <img src="steps/1.png" alt="">
        <li>Click <code>File -> Import Appliance</code></li>
        <li>Select <code>CAPP.ova</code> you just downloaded, click <code>OK</code></li>
        <img src="steps/2.png" alt="">
        <li>Click OK as everything checks out</li>
        <img src="steps/3.png" alt="">
        <li>Wait for the Virtualbox to import</li>
        <img src="steps/4.png" alt="">
      </ol>
    </section>
    <section>
      <h3>3. Start the virtual machine</h3>
      <ol>
        <li>Click <code>Start</code></li>
        <img src="steps/5.png" alt="">
        <li>Wait for around 2 minutes and your server should start up</li>
        <img src="steps/6.png" alt="">
        <div class="d-inline-block alert alert-info">
          If you are curious, the login credientals of the machine is <code>username: admin (password: admin)</code>. That's why it is better to be used as a test-drive.
        </div>
      </ol>
    </section>
    <section>
      <h3>4. Use the system</h3>
      <ol>
        <li>Go back to the host OS while keeping the Virtualbox on</li>
        <li>Visit <a href="http://localhost">localhost</a> in Google Chrome to use the admin panel</li>
        <li>You can login with username <code>admin@admin</code> and password <code>admin</code></li>
        <img src="steps/7.png" alt="" style="width: 80%;">
      </ol>
    </section>
    <section>
      <h3>5. Shut down the VirtualBox</h3>
      <ol>
        <li>After playing around with the system, if you want to shut it down, close the window of the virtualbox, and this popup should show up.</li>
        <img src="steps/8.png" alt="">
        <li>Select <code>Send the shutdown signal</code> and click OK. The machine shuld be shutted down in a minute.</li>
        <div class="d-inline-block alert alert-warning">
          It is important to select <code>Send the shutdown signal</code> as the machine needs to execute the shutdown sequence properly to avoid data loss.
        </div>
      </ol>
    </section>
    <section>
      <h3>6. Warning</h3>
      <div class="d-inline-block alert alert-warning">
        Pleae be noted that you are not able to send emails using the test drive method, as sending emails requires network administrators to provide credientals of email account to setup the system.
      </div>
    </section>
    <section>
      <div class="page-header">
        <h2>Bug Reporting</h2>
      </div>
      <p>
        If you find a problem or a bug in the CAPP2 system, we would like to know it and fix it for future users. <br/>
        Once the project team receives your bug report, we will try to fix it and incorporate it in the next release if possible.<br/>
        <br/>
        Email: <a href="mailto:capp.esystem@gmail.com">capp.esystem@gmail.com</a> (caption: bug report)
      </p>
    </section>
  </div>

</body>
</html>
