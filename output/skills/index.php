<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html lang='en' xml:lang='en' xmlns='http://www.w3.org/1999/xhtml'>
  <head>
    <title>
      Greg Lu
       - Skills
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
          <li><a id="current" href="/skills/index.php">skills</a></li>
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
            Skills and Tools
          </h1>
          <h2>
            Web Development
          </h2>
          <ul>
            <li>
              <a href='http://rubyonrails.org/' target='_blank'>Ruby on Rails:</a>
              web framework
            </li>
            <li>
              <a href='http://rspec.info/' target='_blank'>Rspec:</a>
              Behavior Driven Development (BDD) framework
            </li>
            <li>
              <a href='http://www.mysql.com/' target='_blank'>MySQL:</a>
              open source database
            </li>
            <li>
              <a href='http://php.net/' target='_blank'>PHP:</a>
              web development scripting language
            </li>
            <li>
              <a href='#'>AJAX / Javascript:</a>
              interactive web application technology
            </li>
            <li>
              <a href='#'>XHTML, CSS:</a>
              web technologies
            </li>
            <li>
              <a href='#'>REST, SOAP:</a>
              web services
            </li>
            <li>
              <a href='#'>RSS, Atom:</a>
              standardized web syndication
            </li>
            <li>
              <a href='http://seleniumhq.org/' target='_blank'>Selenium</a>
              ,
              <a href='http://wtr.rubyforge.org/' target='_blank'>WATIR:</a>
              web application testing
            </li>
            <li>
              <a href='http://aws.amazon.com/' target='_blank'>Amazon Web Services:</a>
              cloud computing for web applications
            </li>
            <li>
              <a href='http://haml.hamptoncatlin.com/' target='_blank'>HAML:</a>
              templating language
            </li>
          </ul>
          <h2>
            Project Management
          </h2>
          <ul>
            <li>
              <a href='http://www.capify.org/' target='_blank'>Capistrano:</a>
              automated deployment
            </li>
            <li>
              <a href='http://git-scm.com/' target='_blank'>GIT</a>
              ,
              <a href='http://subversion.tigris.org/' target='_blank'>Subversion</a>
              ,
              <a href='http://www.perforce.com/' target='_blank'>Perforce:</a>
              revision control systems
            </li>
            <li>
              <a href='http://www.github.com' target='_blank'>Github:</a>
              social coding and collaboration
            </li>
            <li>
              <a href='http://lighthouseapp.com/' target='_blank'>Lighthouse</a>
              ,
              <a href='http://trac.edgewall.org/' target='_blank'>Trac</a>
              ,
              <a href='http://www.redmine.org/' target='_blank'>Redmine</a>
              ,
              <a href='http://www.basecamphq.com/' target='_blank'>Basecamp:</a>
              project management and issue tracking
            </li>
            <li>
              <a href='http://www.campfirenow.com/' target='_blank'>Campfire:</a>
              project collaboration
            </li>
          </ul>
          <h2>
            Miscellaneous
          </h2>
          <ul>
            <li>
              Programming Languages: Java, C, C++
            </li>
            <li>
              Operating Systems: Windows, Mac OS X, Linux
            </li>
            <li>
              Productivity and Office Software: Microsoft Office and Adobe Photoshop
            </li>
          </ul>
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
            <a href='http://github.com/enell' target='_blank'>Github Feed</a>
          </h1>
          <?php
          require_once($_SERVER["DOCUMENT_ROOT"] . "/atomlib.php");
          $url = "http://github.com/enell.atom";
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
              <a href='http://github.com/enell' target='_blank'>
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
