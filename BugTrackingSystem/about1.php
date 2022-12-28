<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Document</title>
    <link rel="stylesheet" href="about1.css" />
  </head>
  <body>
    <div class="navigation">
    <ul>
          <li><a href="dashboard.php" class="nava">Dashboard</a></li>
            <li><a href="" class="nava">Administration</a>
                <ul>
                    <li><a href="newproject.php" class="nava">Add New Project</a></li>
                    <li><a href="newbug.php" class="nava">Add Bug</a></li>
                    <li><a href="newuser.php" class="nava">Add User</a></li>
                </ul>
            </li>
            <li><a href="" class="nava">Report</a>
                <ul>
                    <li><a href="projectreports.php" class="nava">Project Report</a></li>
                    <li><a href="bugreports.php" class="nava">Bug Reports</a></li>
                    <li><a href="userreports.php" class="nava">User Reports</a></li>
                </ul>
            </li>
            <li><a href="" class="nava">More Options</a>
                <ul>
                    <li><a href="home1.php" class="nava">Home</a></li>
                    <li><a href="about1.php" class="nava">About Us</a></li>
                    <li><a href="contact1.php" class="nava">Contact Us</a></li>
                </ul>
            </li>
            <li><a href="logoutphp.php" class="nava">Logout</a></li>
      </ul>
    </div>
    <div class="container">
      <div class="details">
        <p class="about">ABOUT BUG TRACKING SYSTEM</p>
        <hr />
        <p class="para">
          <br />
          A bug tracking system or defect tracking system is a software
          application that keeps track of reported software bugs in software
          development projects. It may be regarded as a type of issue tracking
          system. Many bug tracking systems, such as those used by most
          open-source software projects, allow end-users to enter bug reports
          directly.Other systems are used only internally in a company or
          organization doing software development. Typically bug tracking
          systems are integrated with other project management software. A bug
          tracking system is usually a necessary component of a professional
          software development infrastructure, and consistent use of a bug or
          issue tracking system is considered one of the "hallmarks of a good
          software team".
        </p>
        <br />
        <p class="about">Making</p>
        <hr />
        <p class="para">
          A major component of a bug tracking system is a database that records
          facts about known bugs. Facts may include the time a bug was reported,
          its severity, the erroneous program behavior, and details on how to
          reproduce the bug; as well as the identity of the person who reported
          it and any programmers who may be working on fixing it.[3] Typical bug
          tracking systems support the concept of the life cycle for a bug which
          is tracked through the status assigned to the bug. A bug tracking
          system should allow administrators to configure permissions based on
          status, move the bug to another status, or delete the bug. The system
          should also allow administrators to configure the bug statuses and to
          what extent a bug in a particular status can be moved. Some systems
          will e-mail interested parties, such as the submitter and assigned
          programmers, when new records are added or the status changes. It is
          possible to perform automated diagnosis based on the content of the
          bug report. For instance, one can do automated detection of bug
          duplicates
        </p>
        <br>
        <p class="about">Useage</p>
        <hr />
        <p class="para">
          The main benefit of a bug-tracking system is to provide a clear
          centralized overview of development requests (including both bugs and
          improvements, the boundary is often fuzzy), and their state. The
          prioritized list of pending items (often called backlog) provides
          valuable input when defining the product road map, or maybe just "the
          next release". In a corporate environment, a bug-tracking system may
          be used to generate reports on the productivity of programmers at
          fixing bugs. However, this may sometimes yield inaccurate results
          because different bugs may have different levels of severity and
          complexity. The severity of a bug may not be directly related to the
          complexity of fixing the bug. There may be different opinions among
          the managers and architects.
        </p>
      </div>
      <div class="image">
        <div class="box"><img src="bug3.png" class="bug3" alt="" /></div>
        <div class="box" id="box2">
          <img src="bug4.png" class="bug3" alt="" />
        </div>
      </div>
    </div>
  </body>
</html>
