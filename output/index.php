<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html lang='en' xml:lang='en' xmlns='http://www.w3.org/1999/xhtml'>
  <head>
    <title>
      Greg Lu
       - About
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
          <li><a id="current" href="/index.php">about</a></li>
          <li><a href="/demos/index.php">demos</a></li>
          <li><a href="/skills/index.php">skills</a></li>
          <li><a href="/work/index.php">work</a></li>
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
            About
          </h1>
          <p>
            I'm currently living in Montreal, studying towards a Software Engineering degree at
            <a href='http://www.mcgill.ca' target='_blank'>McGill University.</a>
             I have been doing web development for over 6 years now, starting with PHP and then moving to database backed web applications with MySQL. For the past 3 years, I've been working with Ruby on Rails professionally for creating web applications, but have worked with many other languages and technologies throughout my own explorations and university studies.
          </p>
          <p>
            In terms of development, I'm a strong believer in
            <a href='http://en.wikipedia.org/wiki/Test_driven_development' target='_blank'>Test</a>
            /
            <a href='http://en.wikipedia.org/wiki/Behavior_Driven_Development' target='_blank'>Behavior</a>
            Driven Development, writing DRY code (see wise words on the right), and the use of frameworks. I'm a strong opponent against the
            <a href='http://en.wikipedia.org/wiki/Waterfall_model' target='_blank'>waterfall development model</a>
            for the majority of projects (although it is required in very rare cases), and instead opt for more iterative approaches like
            <a href='http://en.wikipedia.org/wiki/Agile_software_development' target='_blank'>agile</a>
            or
            <a href='http://en.wikipedia.org/wiki/Scrum_(development)' target='_blank'>scrum</a>
            .
          </p>
          <p>
            Project management and design is where I hope to expand my career more towards, but I also enjoy development just as much.
          </p>
          <p>
            Please refer to the other sections of my portfolio, and feel free to
            <a href='#' onclick="$.scrollTo( '#contact', 1000 );">contact me</a>
            with the information below if you have any questions.
          </p>
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
