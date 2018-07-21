<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link rel="stylesheet" href="index.css">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB" crossorigin="anonymous">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.1.0/css/all.css" integrity="sha384-lKuwvrZot6UHsBSfcMvOkWwlCMgc0TaWr+30HWe3a4ltaBwTZhyTEggF5tJv8tbt" crossorigin="anonymous">
    <!-- Font - IBM Plex Mono -->
    <link href="https://fonts.googleapis.com/css?family=IBM+Plex+Mono" rel="stylesheet">
    <title>Meaghan Long</title>
  </head>
  <body>

    <div class="container-fluid">

      <?php include 'header.php';?>

      <div class="row shockoe-section">
        <div class="col-md-3">

          <div class="shockoe-header">
            <h1>shockoe.com</h1>
            <ul class="description-list">
              <li>UX/UI Designer + Frontend Developer </li>
              <li>Website </li>
              <li>2016</li>
            </ul>
          </div>

          <div class="team">
            <p>
              <strong>Team</strong>
              <br>
              <a href="">Samantha Carbonell</a>. <a href="">Nikki Ziegler</a>. Meaghan Long.
            </p>
          </div>
        </div>

        <div class="col-md-9">
          <div class="text-center">
            <img src="../imgs/info-img.png" class="img-fluid" alt="Responsive image">
          </div>

          <div class="row highlights">

            <div class="col-md-12">
              <h2 class="header2">Highlights</h2>
            </div>

            <div class="col-md-4">
              <p>
                <strong>Challenge</strong>
                <br>
                Showcasing Shockoe's best work throught a responsive website
              </p>
            </div>

            <div class="col-md-4">
              <p class="highlight-border">
                <strong>Opportunity</strong>
                <br>
                Lead direction of the website through wireframes, sitemaps, asset collection and ui designs
              </p>
            </div>

            <div class="col-md-4">
               <p class="highlight-border">
                <strong>Outcome</strong>
                <br>
                Delivered website, and personally grew user experience skills
              </p>
            </div>

          </div>

          <div class="text-description">
            <h2 class="header2">Summary</h2>
            <p>Shockoe needed a refresh on their business website that was responsive, had up-to-date branding, and showcased their best work. The website needed to be completed by the end of my 3-month internship. Within that time, I researched competitors, created site maps, sketched wireframes, collected visual assets both internally and externally, laid out pages in sketch, and dabbed in front-end development in Wordpress. During that time I met with the CEO & COO to discuss their requirements vision for this website. This was a special opportunity as it gave me my first taste of user experience design, and allowed me to expand my knowledge in HTML/CSS and Wordpress.</p>

            <h2 class="header2">Sitemap, Sketches, Branding</h2>
            <p>Shockoe’s aim for the website was to have a format that was clean and simplified to make the website easier to absorb the content and navigate the website. Before going into content, focusing on the sitemap was needed to understand what content we needed to create, and which pages of the website we could retire. With this understanding it was off to pen and paper focusing on layouts that would make it easier to grasp the content Shockoe wanted to promote. As for branding, uncovering a dark blue color that complimented the Shockoe orange was critical in aiding Shockoe to reidentify itself.</p>

            <h2 class="header2">Low to High Fidelity</h2>
            <p>From there it moved to digitalizing the sketches. By utilizing low fidelity grey scale in the beginning, issues where identified that where unforeseen, including content overlay concerns, excessive scrolling and animation appropriateness. Once the issues were addressed, bringing color and visual content to the site was the next step. Selecting icons compatible with Company brand guidelines via The Noun Project was important in relaying content to users. In addition, researching and selecting strong stock photos for the hero and services images aided in pulling in users. The final design was then used as a blueprint for the Wordpress development. </p>

            <h2 class="header2">Landing page copy for the web</h2>
            <p>The landing pages focused on industry specialties with the intent of attracting new clients and expanding the share of wallet for existing clients. Problems that needed to be solved were the placement of the case study and the addition of links to client work tailored towards the designated target audience.</p>
            <p>With regards to the case study, Shockoe requested that its appear on the landing page. With no clear direction on the amount of content that would be needed for the case study, copy writer collaboration was solicited. It was this collaboration that prompted the realization that having the case study on the landing page would clutter the page and overwhelm the user. The solution was to create a PDF of the case study and imbed the PDF on the landing page as a link to the details of the case study. This decision allowed the user to have access to a clean and clear landing page housing all the important details. The link to the PDF, however, still allowed the user to obtain in depth data regarding Shockoe’s capabilities and expertise.</p>

            <h2 class="header2">Landing page copy</h2>
            <p>It was decided the development process of the project would continue to use the WordPress theme of the previous website. Leaning on features and short codes that were already established would streamline the development process.</p>
            <p>Coding associated with the services pages was an area of struggle. The issue was aligning the services content along the left hand margin on mobile while allowing for left or right hand margin placement on desktop. Fortunately a strong and accessible mentor assisted with analyzing the issue and helping to find a solution in CSS. </p>
            <p>HTML5 came into play as it related to stock photos that had an icon or text on top of it.  The content overlaying the image was either blue or orange, which made it difficult to read when placed on the images. To remedy the problem, a blue tint was added on the images to provide a stronger contrast.  Instead of creating a Photoshop file for each image with a color overlay, a div was added in the HTML that included the background color and opacity. Subsequently, a class was added to selected images to allow for manipulation across the website when required.</p>
          </div>

        </div>
      </div>
    </div>

  </body>
</html>
