<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html lang='en' xml:lang='en' xmlns='http://www.w3.org/1999/xhtml'>
  <head>
    <title>
      Greg Lu
       - Demos
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
          <li><a id="current" href="/demos/index.php">demos</a></li>
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
            Demos
          </h1>
          <div class='block'>
            <h2>
              Metranome
            </h2>
            <p>
              <a href='http://www.metrano.me' target='_blank'>Metranome</a>
              is a personal project that I've been working on independently for half a year. It is a collaborative information network which aims to bring classmates together to share and view course resources such as computer files, textbooks, and websites. This information is then presented contextually within a student's courses, or through a site wide search.
            </p>
            <p>
              I wanted Metranome to support any number of educational institutions, and therefore incorporated a model similar to Wikipedia, where students had the ability to add or edit all the information (such as program and course listings specific to each university) in order to keep everything updated.
            </p>
            <p>
              My primary motivation for creating Metranome was to provide a venue where I could implement my web development abilities in a single, independent project. Since I was under no pressure of deadlines or requirement constraints, I was able to practice my project design and development skills in a creative outlet so that I could showcase some of my work.
            </p>
            <p>
              Through Metranome, I was able to put into practice BDD (achieving a 2:1 test to code ratio), many AJAX implementations, web services, RSS feeds, capistrano automated application deployment, GIT, Github, and Amazon Web Services (S3 and EC2). I also researched many other topics which I hope to (soon) put into practice such as scaling web applications (Rails specifically), cloud computing, memcached, more robust automated backup procedures, and web presence/promotion.
            </p>
            <p>
              Metranome is currently live and can be found at
              <a href='http://www.metrano.me' target='_blank'>www.metrano.me.</a>
              Below is a screencast I created to demonstrate the site's functionality.
            </p>
            <div class='center'>
              <object data='http://www.screentoaster.com/swf/STPlayer.swf' height='344' type='application/x-shockwave-flash' width='425'>
                <param name='movie' value='http://www.screentoaster.com/swf/STPlayer.swf' />
                <param name='allowFullScreen' value='true' />
                <param name='flashvars' value='video=stVEpTQ0ZLTFheQVhVWVJb' />
              </object>
            </div>
          </div>
          <div class='block'>
            <h2>
              This Portfolio
            </h2>
            <p>
              Although this portfolio seems like a pretty standard website, it was in fact created with
              <a href='http://nanoc.stoneship.org/' target='_blank'>Nanoc,</a>
              &quot;a Ruby CMS that generates static HTML.&quot; I chose to use this tool because it allowed me to create this site with the
              <a href='http://haml.hamptoncatlin.com/' target='_blank'>HAML templating language</a>
              without the need for a full blown framework. The source code for this portfolio can be found on
              <a href='https://github.com/enell/portfolio/' target='_blank'>my Github page.</a>
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
