<!doctype html>
<html lang="en">
  <head>
    <?php include 'head.php';?>
    <title>Marketplace</title>
  </head>
  <body>
  <?php include 'header.php';?>
  <div class="container-fluid">
    <div class="row shockoe-section">
      <div class="col-md-3">
        <div class="fixed-left-column">
          <div class="cs-title">
            <h1>Marketplace</h1>
            <ul>
              <li>UI Designer
              </li>
              <li>Marketplace
              </li>
              <li>2017 - present</li>
            </ul>
          </div>

          <div class="team">
            <h6>Team</h6>
            <p>
              <a href="http://www.arjavbadjatiya.com/">Arjav Badjatiya</a>.
              Meaghan Long.
            </p>
          </div>

        </div>
      </div>

      <div class="col-md-9">
        <div class="text-center">
          <img src="img/hero_mp.png" class="img-fluid" alt="Responsive image" style="max-width:800px">
        </div>

        <div class="row highlights">

          <div class="col-md-12">
            <h2 class="header2">Highlights</h2>
          </div>

          <div class="col-md-4">
            <p>
              <strong>Challenge</strong>
              <br> Create an intuitive marketplace for providers and purchasers.
            </p>
          </div>

          <div class="col-md-4">
            <p class="highlight-border">
              <strong>Opportunity</strong>
              <br> Work on an ecommerce site and learn about purchasing requests within an organization
            </p>
          </div>

          <div class="col-md-4">
            <p class="highlight-border">
              <strong>Outcome</strong>
              <br> Redesigned the home page and currently working on reviewing 12 different purchasing workflows.
            </p>
          </div>

        </div>

        <div class="row cs-paragraphs highlights">
          <h2 class="header2">Summary</h2>
          <p>Between juggling ArcGIS Online and Calcite Web, I also spend time with our ArcGIS Marketplace team where both Esri and other GIS suppliers can provide data and apps. Having limited time and resources, making the strongest input has been a necessity in redesigning the home page, syncing the system to Calcite, and working towards improving our 12 different types of checkout experiences. This is an ongoing project where I double team with a UX designer, working towards having designs ready one sprint ahead of our developers, to improve deliverability and expectations.
          </p>
        </div>

          <div class="row cs-paragraphs highlights">
            <h2 class="header2">Home page</h2>
            <p>The home page was redesigned in 2017, where the UX designer and I double teamed to work on a clearer search and discoverability experience for our users.
            </p>
            <div id="lightgallery-1" class="lightgallery">
              <a href="img/mp_fullpage.png">
                  <img src="img/mp_fullpage_s.png"/>
              </a>
              <a href="img/mp_card.png">
                  <img src="img/mp_card_s.png"/>
              </a>
            </div>
          </div>

          <div class="row cs-paragraphs highlights">
            <h2 class="header2">Pain Points + Competitor Research</h2>
            <p>Our first step was marking the pain points that our users were struggling with in order to find items along with making discoverability easier. Some items that we noted were:
            </p>
            <ul>
              <li>Difficulty finding search
              </li>
              <li>Reducing the visibility of unrated cards
              </li>Poorly directing users to standout items
              <li>Inconsistent fonts, colors, and component patterns on the Homepage
              </li>
            </ul>
            <p>After identifying these pain points we moved to competitor research, focusing on homepages and card designs with rating systems. We looked at many marketplaces, both GIS and non-GIS related, taking note of their solutions to the problems we were facing as well. Along with the cards, we focused on how online stores handle items that have not been rated.
            </p>
          </div>
          <div class="row cs-paragraphs highlights">
            <h2 class="header2">High Fidelity Designs</h2>
            <p>Splitting the work, the UX designer focused on the wireframe of the site working on the pain points and incorporating the research, and when he was finished, the deliverables were sent to me to work the user interface designs.
            </p>
            <p>Due to accessibility, limitations on color for both background and text were applied. Thus, focusing on solid colors that were AA accessibility was our biggest hurdle. Besides that, focusing on the feature header, cards, search, filter, and footer remained.
            </p>
            <p>We are still waiting for items to be implemented, like the filter pattern that started for this project that has grown to being tested and to be implemented through Esri products and marketing. We are also finalizing with the icon team on illustrations that would appear to support the footer, and are waiting for final marginal tweaks from the development team.
            </p>
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
          $("#lightgallery-3").lightGallery();
      });
    </script>
  </body>
</html>
