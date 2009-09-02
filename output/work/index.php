<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html lang='en' xml:lang='en' xmlns='http://www.w3.org/1999/xhtml'>
  <head>
    <title>
      Greg Lu
       - Work
    </title>
    <meta content='text/html; charset=iso-8859-1' http-equiv='Content-Type' />
    <link href='/css/EliteCircle.css' rel='stylesheet' type='text/css' />
    <link href='/css/jquery.lightbox-0.5.css' media='screen' rel='stylesheet' type='text/css' />
    <script src='/js/jquery-1.3.1.min.js' type='text/javascript'></script>
    <script src='/js/jquery.scrollTo-min.js' type='text/javascript'></script>
    <script src='/js/jquery.lightbox-0.5.min.js' type='text/javascript'></script>
    <script src='/js/jquery.expander.js' type='text/javascript'></script>
    <script type='text/javascript'>
      $(function() {
      $('a[rel=lightbox]').lightBox();
      });
    </script>
    <script type='text/javascript'>
      $(document).ready(function() {
      $('.expandable').expander({
      slicePoint: 0,
      expandPrefix: '',
      expandText: '[...]',
      collapseTimer: 0,
      userCollapseText: '[^]'
      });
      });
    </script>
  </head>
  <body>
    <div id='header'>
      <div id='header-content'>
        <h1 id='logo'>
          Greg
          <span class='orange'>Lu</span>
        </h1>
        <h2 id='slogan'>Web application developer</h2>
        <div id='header-links'>
          <p>
            <a href='http://www.greglu.com/'>Home</a>
            |
            <a href='#' onclick="$.scrollTo( '#contact', 1000 );">Contact</a>
          </p>
        </div>
        <ul>
          <li><a href="/index.php">about</a></li>
          <li><a href="/demos/index.php">demos</a></li>
          <li><a href="/skills/index.php">skills</a></li>
          <li><a id="current" href="/work/index.php">work</a></li>
          <li>
            <a href='http://www.greglu.com/blog'>Blog</a>
          </li>
          <li>
            <a href='/Gregory_Lu-CV.pdf'>CV</a>
          </li>
        </ul>
      </div>
    </div>
    <div id='content-wrap'>
      <div id='content'>
        <div id='main'>
          <h1>
            Work
          </h1>
          <div class='block'>
            <a href='/images/support.png' rel='lightbox' title='Interfacing Knowledge Center: Issue tracking focused towards clients.'>
              <img align='left' alt='Interfacing Knowledge Center' height='100' src='/images/support.png' width='100' />
            </a>
            <span class='title'>
              Interfacing Knowledge Center
            </span>
            <p>
              I was contracted to design and develop an issue tracking system for Interfacing, a software company based in Montreal. Interfacing was looking to build a solution to provide their clients with a more direct line of support, by allowing them to report bugs and get live updates and patches through an online system. My main responsibility was project management, however I was also responsible for design, and a significant portion of the development. The project was implemented with a heavily modified version of
              <a href='http://www.redmine.org' target='_blank'>Redmine</a>
              for the base of the application, and a Flex front end for the client portal that called on web services from Redmine to populate the data. The contract was completed on time, on budget, and according to specifications.
            </p>
            <div class='expandable'>
              <p>
                The tools and technologies used in this project included:
              </p>
              <ul>
                <li>
                  Ruby on Rails
                </li>
                <li>
                  MySQL
                </li>
                <li>
                  Adobe Flex
                </li>
                <li>
                  Rspec
                </li>
                <li>
                  Git / Github
                </li>
                <li>
                  Capistrano
                </li>
                <li>
                  WSDL Web Services
                </li>
                <li>
                  <a href='http://www.sugarcrm.com/crm/' target='_blank'>Sugar CRM integration</a>
                </li>
              </ul>
            </div>
          </div>
          <div class='block'>
            <a href='/images/voffice.jpg' rel='lightbox' title='Virtual Office: Meeting Room - Company collaboration tool.'>
              <img align='left' alt='Virtual Office: Meeting Room' height='100' src='/images/voffice.jpg' width='100' />
            </a>
            <span class='title'>
              Virtual Office: Meeting Room
            </span>
            <p>
              For the senior design project of my university degree, my group was tasked with creating a web application for businesses similar to Campfire within one semester. The idea was to create a type of company meeting room where employees and clients can meet up to discuss, share files, show powerpoint presentations and use a whiteboard. I recommended the use of Ruby on Rails, and due to my experience, I was the de facto lead developer. Although aesthetically crude, I had a chance to implement push server technology (Juggernaut plugin for Ruby on Rails) and many other interesting AJAX functionality.
            </p>
          </div>
        </div>
        <div id='sidebar'>
          <h1>
            <a href='http://www.greglu.com/blog' target='_blank'>Blog Feed</a>
          </h1>
          <?php
          require_once($_SERVER["DOCUMENT_ROOT"] . "/rsslib.php");
          $url = "http://greglu.com/blog/feed/";
          echo RSS_Display($url, 5);
          ?>
          <h1>
            <a href='http://github.com/greglu' target='_blank'>Github Feed</a>
          </h1>
          <?php
          require_once($_SERVER["DOCUMENT_ROOT"] . "/atomlib.php");
          $url = "http://github.com/greglu.atom";
          echo Atom_Display($url, 5);
          ?>
          <h1>
            Wise Words
          </h1>
          <p>
            "Always code as if the person who will maintain your code is a maniac serial killer that knows where you live."
          </p>
          <p class='align-right'>
            - Unknown
          </p>
        </div>
      </div>
    </div>
    <div id='footer'>
      <div id='footer-content'>
        <div class='col float-left space-sep' id='contact'>
          <h2>
            Contact Information
          </h2>
          <ul class='columns'>
            <li class='top'>
              <strong>Email</strong>
              - greg.lu [at] gmail [dot] com
            </li>
            <li>
              <strong>Telephone</strong>
              - (514) 815-3611
            </li>
            <li>
              <a href='http://www.twitter.com/greglu'>
                <strong>Twitter - @greglu</strong>
              </a>
            </li>
            <li>
              <a href='/Gregory_Lu-CV.pdf'>
                <strong>Curriculum Vitae</strong>
              </a>
            </li>
          </ul>
        </div>
        <div class='col float-left'>
          <h2>
            Links
          </h2>
          <ul class='columns'>
            <li class='top'>
              <a href='http://www.greglu.com/blog' target='_blank'>
                <strong>My Blog</strong>
              </a>
            </li>
            <li>
              <a href='http://github.com/greglu' target='_blank'>
                <strong>Github Profile</strong>
              </a>
            </li>
            <li>
              <a href='http://workingwithrails.com/person/7317-gregory-lu' target='_blank'>
                <strong>WorkingWithRails Page</strong>
              </a>
            </li>
          </ul>
        </div>
        <div class='col2 float-right'>
          <div class='footer-info'>
            <div id='copyright'>
              &copy; Copyright 2009
              <strong>
                Gregory Lu
              </strong>
            </div>
            <div id='design'>
              Design by:
              <a href='http://www.styleshout.com/'>styleshout</a>
            </div>
            <div id='valid'>
              Valid
              <a href='http://jigsaw.w3.org/css-validator/check/referer'>CSS</a>
              |
              <a href='http://validator.w3.org/check/referer'>XHTML</a>
            </div>
          </div>
          <div class='footer-info'>
            <ul>
              <li>
                <a href='http://www.gregorylu.com'>Home</a>
              </li>
              <li>
                <a href='#' onclick="$.scrollTo( '#header', 1000 );">Back to Top</a>
              </li>
            </ul>
          </div>
        </div>
      </div>
    </div>
    <script type='text/javascript'>
      var gaJsHost = (("https:" == document.location.protocol) ? "https://ssl." : "http://www.");
      document.write(unescape("%3Cscript src='" + gaJsHost + "google-analytics.com/ga.js' type='text/javascript'%3E%3C/script%3E"));
    </script>
    <script type='text/javascript'>
      try {
      var pageTracker = _gat._getTracker("UA-7587231-1");
      pageTracker._trackPageview();
      } catch(err) {}
    </script>
  </body>
</html>
