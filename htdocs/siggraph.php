<!doctype html>
<html lang="en">

<head>
  <?php include 'head.php';?>
  <title>SIGGRAPH</title>
</head>
<body>
  <?php include 'header.php';?>
  <div class="container-fluid">
    <div class="row shockoe-section">
      <div class="col-md-3">
        <div class="fixed-left-column">
          <div class="cs-title">
            <h1>SIGGRAPH</h1>
            <ul>
              <li>Lead UX/UI Designer
              </li>
              <li>Website application
              </li>
              <li>2016 - present</li>
            </ul>
          </div>

          <div class="team">
            <h6>Team</h6>
            <p>
              <a href="https://www.linkedin.com/in/munkhtsetseg-nandigjav-b7147a26/">Munkhtsetseg Nandigjav</a>.
              <a href="https://www.linkedin.com/in/sarahrusty/">Sarah Rust</a>.
              <a href="https://www.linkedin.com/in/jonathan-kuo-5b0415137/">Jonathan Kuo</a>.
              <a href="https://www.linkedin.com/in/emmacgauthier/">Emma Gauthier</a>.
              Pascal Goffin. Robert Kistner. Meaghan Long.
            </p>
          </div>

          <div class="anchor-links">
            <h6>Topics</h6>
            <ul>
              <li><a href="#users">Users</a></li>
              <li><a href="#application">Application</a></li>
              <li><a href="#student-profiles">Student profiles</a></li>
            </ul>
          </div>
        </div>
      </div>

      <div class="col-md-9">
        <div class="text-center">
          <img src="img/hero_siggraph.jpg" class="img-fluid" alt="Responsive image" style="max-width:875px">
        </div>

        <div class="row highlights">

          <div class="col-md-12">
            <h2 class="header2">Highlights</h2>
          </div>

          <div class="col-md-4">
            <p>
              <strong>Challenge</strong>
              <br> Create an intuitive system for international students to apply to.
            </p>
          </div>

          <div class="col-md-4">
            <p class="highlight-border">
              <strong>Opportunity</strong>
              <br> Address user pain points and provide easier workflows to complete applications.
            </p>
          </div>

          <div class="col-md-4">
            <p class="highlight-border">
              <strong>Outcome</strong>
              <br> Increased student applications by 18%.
            </p>
          </div>

        </div>

        <div class="row cs-paragraphs highlights">
          <h2 class="header2">Summary</h2>
          <p>The Student Volunteer Program wanted a more streamlined stronger experience as early on as the application process, and that was going to be accomplished by replacing a system that hadn’t been refreshed since being its conception in the early 2000s. Most of my focus involved leading workflows and designs to make the student applications easier to understand and complete. The team was able to accomplish this with student applications going up by 18%.</p>
          <p>We have been successfully growing the system by retrospecting after each milestone of the student application process based on the support emails we received from students. This allowed us to document and plan for designs and developments for the following year.</p>
          <p>My time on this system will end in August 2019 but this has been an important milestone in my growth process. It has built upon my knowledge on system designs and taught me how consistent UX/UI expedites a user’s workflow. In addition to that, it has helped me with remote communication and etiquette.</p>
          <p>My new goal for this system during my time left is to take my experience as Communication Lead for the Student Volunteer Subcommittee and offer new features to the software to reduce the amount of support messages we receive.</p>

          <div id="users">
            <h2 class="header2">Users + Goals</h2>
            <p>While beginning this project, we had identified three types of users that would have access to the system, along with their goals and pain points. It allowed us to make stronger decisions on the experience by using this as reference.</p>

            <div class="row">
              <div class="col-md-2 text-center">
                <img src="img/s_admin.svg" class="img-fluid" alt="Responsive image">
              </div>

              <div class="col-md-4">
                <strong>Admin</strong> <br>
                <p>The Subcommittee members need to have all data available of every student who has signed up within the Student Volunteer Program:</p>

              </div>
              <div class="col-md-6">
                <ul class="goals-and-points">
                  <li>Have students’ complete applications
                  </li>
                  <li>Review candidates for financial aid
                  </li>
                  <li>Know the students’ schedules
                  </li>
                  <li>Limit support contact from students
                  </li>
                  <li>Information about students during the conference
                  </li>
                </ul>

              </div>
            </div>

            <div class="row yellow-border-top">
              <div class="col-md-2 text-center">
                <img src="img/s_tl.svg" class="img-fluid" alt="Responsive image">
              </div>

              <div class="col-md-4">
                <strong>Viewer with permissions</strong> <br>
                <p>Team leaders are top performing student volunteers who are given limited access of all student volunteers:</p>

              </div>
              <div class="col-md-6">
                <ul class="goals-and-points">
                  <li>Complete Student Volunteer application
                  </li>
                  <li>Scoring quickly student volunteer essays
                  </li>
                  <li>Digesting shift information while on the run
                  </li>
                </ul>
            </div>
          </div>

            <div class="row yellow-border-top">
              <div class="col-md-2 text-center">
                <img src="img/s_viewer.svg" class="img-fluid" alt="Responsive image">
              </div>

              <div class="col-md-4">
                <strong>Viewer</strong> <br>
                <p>Student volunteers are only able to access their own information</p>

              </div>
              <div class="col-md-6">
                <ul class="goals-and-points">
                  <li>Completing Student Volunteer application
                  </li>
                  <li>Accepting or declining position if offered
                  </li>
                  <li>Understanding their schedule
                  </li>
                </ul>
              </div>
            </div>
          </div>

          <div id="application">
            <h2 class="header2">Application</h2>
            <p>The first task we had for the system was having the application available that would be understood both by Student volunteers and Team leaders. Previously, the form was not only difficult to understand, it was not clear what was inaccurately filled and how many characters a student typed into a form, or even what section of the form a student was in or how much of the form they had left. But within one month, paint points of the form were reviewed, addressed with stronger error states, character counts at the bottom of the form and a page indicator at the top of the page highlighting the current page.
            </p>

            <span class="lightgallery-title">Application Desktop</span>
            <div id="lightgallery-1" class="lightgallery">
                <a href="img/siggraph_desktop.png">
                    <img src="img/siggraph_desktop_s.png" />
                </a>
                <a href="img/siggraph_mobile.png">
                    <img src="img/siggraph_mobile_s.png" />
                </a>
            </div>

          </div>

          <div id="student-profiles">
            <h2 class="header2">Profile</h2>
            <p>The biggest struggle during the week at the conference is the schedule of shifts. From students not fully understanding specific information, team leaders working around many shifts, to the subcommittee getting up to date information on students, it can be a lot of confusion and waste of precious time re-explaining information to many people.
            </p>
            <p>To fix this, we have a Student volunteer and Team leader profile that states this information clearly. Breaking it down, the Subcommittee can view all information of a Student volunteer, including a quick view of the programs and the team leaders they work with and their schedules. Information can be drilled further by click on a time and a modal appearing with an overview of their performance, including whether they showed up for a shift or not.
            </p>
            <p>For a Team leader, being able to quickly scan a list of Student volunteers along with checking them in and out is important in order to streamline setup time and switching students in a program. Appearing on their modal is a table with a list of actions per student, including an option to write a review.
            </p>
            <p>Lastly, we have Student volunteers who have two main points: not clearly knowing what time their shift is, taking a while to grasp that they needed to be at the office 30 minutes before their shift for setup and training, and not knowing who their Team leader would be for that shift. For this we add all the necessary information to their modal, including a picture of their TL that will make it easier for the student to quickly identify their Team lead.
            </p>

            <div id="lightgallery-2" class="lightgallery">
              <a href="img/siggraph_sv_view.png">
                  <img src="img/siggraph_sv_view_2.png" />
              </a>
              <a href="img/siggraph_tl_view_1.png">
                  <img src="img/siggraph_tl_view_1_s.png" />
              </a>
              <a href="img/siggraph_tl_view_2.png">
                  <img src="img/siggraph_tl_view_2_s.png" />
              </a>
              <a href="img/siggraph_svsc_view.png">
                  <img src="img/siggraph_svsc_view_s.png" />
              </a>
            </div>

          </div>

        </div>
      </div>
    </div>

    <?php include 'scripts.php';?>
    <script type="text/javascript">
      $(document).ready(function() {
          $("#lightgallery-1").lightGallery();
          $("#lightgallery-2").lightGallery();
      });
    </script>
  </body>
</html>
