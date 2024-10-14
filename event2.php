<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Web Development Workshop</title>

    <link rel="stylesheet" href="inc/css/common.css">
    <?php require('inc/links.php'); ?>
</head>
<body>
    <button type="button" class="btn btn-outline-dark ms-3 mt-3">
        <a href="index.php" class="text-reset text-decoration-none">
        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-arrow-return-left" viewBox="0 0 16 16">
            <path fill-rule="evenodd" d="M14.5 1.5a.5.5 0 0 1 .5.5v4.8a2.5 2.5 0 0 1-2.5 2.5H2.707l3.347 3.346a.5.5 0 0 1-.708.708l-4.2-4.2a.5.5 0 0 1 0-.708l4-4a.5.5 0 1 1 .708.708L2.707 8.3H12.5A1.5 1.5 0 0 0 14 6.8V2a.5.5 0 0 1 .5-.5z"></path>
        </svg>Home
        </a>
    </button>
    <section class="position-relative p-3" style="margin-top: 30px">
        <button type="button" class="btn btn-success position-absolute top-20 start-50 translate-middle px-5 border-warning border-5">
            <h3 class="text-center fs-5 pt-1 fw-normal">Web Development Workshop</h3>
        </button>
        <div class="container-fluid" style="border:2.5px solid #0F9D58; border-radius:10px">
            <div class="row m-3">
                <div class="col-lg-4 mt-4 order-lg-1 order-md-1 order-1 border border-warning rounded m-2 d-flex flex-column">
                    <img src="img/events/event2.jpg" class="rounded img-fluid m-3 border border-dark" alt="...">
                    <dl class="row ps-5">
                        <dt class="col-sm-4">Conducted By:</dt>
                        <dd class="col-sm-6">Suyash Patalbansi</dd>

                        <dt class="col-sm-4">Dates:</dt>
                        <dd class="col-sm-6">9 Sept - 10 Sept 2023</dd>

                        <dt class="col-sm-4">Venue:</dt>
                        <dd class="col-sm-6">CC Lab, BITW</dd>
                    </dl>
                </div>
            
                <div class="col-lg-7 col-md-5 mt-5 p-3 order-lg-2 order-md-2 order-2">
                    <h4>Event Description:</h4>
                    <br>
                    <p>&emsp;&emsp;&emsp;&emsp;The session  begins with an introduction to web development, including its importance in the digital world and the various technologies and tools involved. 
                        Basic web development usually starts with HTML (Hypertext Markup Language) for structuring web content and CSS (Cascading Style Sheets) for styling and layout.
                        <br>
                        <br>
                        &emsp;&emsp;&emsp;&emsp;The basic document structure of an HTML document typically consists of elements like html, head, and body tags to define the overall structure, metadata, and content of the page.
                        HTML Elements: HTML elements consisting of an opening tag, content, and a closing tag. Examples include headings (h1, h2, ...), paragraphs, lists, links, and images were taught.
                        <br>
                        <br>
                        &emsp;&emsp;&emsp;&emsp;More in html regarding attributes, body section, tags in html etc were discussed with hands-on practice.
                        Selectors , properties , values, inline , internal and external CSS are also discussed.
                        <br>
                        <br>
                        &emsp;&emsp;&emsp;&emsp;Moreover after that a treasure hunt was organized by the GDSC team for the students who attended the session. The winners were awarded by a book by the faculty co-ordinator Prof. Sandesh Jain sir.
                        It was overall a fun-filled and very insightful session.</p>
                </div>
            </div>

            <div class="row p-2">
                <div class="container border border-dark rounded p-3">
                    <h4>Event Glimpses:</h4>
                    <div id="pic" class="row">
                        <div class="col">
                            <img src="img\events\event2\Picture1.png" class="d-block w-100 border border-success" alt="...">
                        </div>
                        <div class="col">
                            <img src="img\events\event2\Picture2.png" class="d-block w-100 border border-success" alt="...">
                        </div>
                        <div class="col">
                            <img src="img\events\event2\Picture3.png" class="d-block w-100 border border-success" alt="...">
                        </div>
                        <!--<div class="col">
                            <img src="img\events\event2\Picture4.png" class="d-block w-75 border border-success" alt="...">
                        </div> -->
                    </div>
                </div>
            </div>
        </div>
    </section>
    <div class="position-relative">
        <button type="button" class="btn btn-outline-dark ms-3 my-4 position-absolute top-100 start-50 translate-middle">
            <a href="index.php" class="text-reset text-decoration-none">
            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-arrow-return-left" viewBox="0 0 16 16">
                <path fill-rule="evenodd" d="M14.5 1.5a.5.5 0 0 1 .5.5v4.8a2.5 2.5 0 0 1-2.5 2.5H2.707l3.347 3.346a.5.5 0 0 1-.708.708l-4.2-4.2a.5.5 0 0 1 0-.708l4-4a.5.5 0 1 1 .708.708L2.707 8.3H12.5A1.5 1.5 0 0 0 14 6.8V2a.5.5 0 0 1 .5-.5z"></path>
            </svg>Home
            </a>
        </button>
    </div>
</body>
</html>