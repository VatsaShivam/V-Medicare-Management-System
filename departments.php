<!DOCTYPE html>
<html>
<head>
	<?php include_once("headlinks.php")?>
 
</head>
<body>
<?php include_once("header.php");?>
<!---Body Content---->
<main id="main">

    <section class="breadcrumbs">
      <div class="container">

        <div class="d-flex justify-content-between align-items-center">
          <h2>Departments</h2>
          <ol>
            <li><a href="index.php">Home</a></li>
            <li>Departments</li>
          </ol>
        </div>

      </div>
    </section>

    <!-- ======= Departments Section ======= -->
    <section id="departments" class="departments">
      <div class="container">

        <div class="section-title">
          <h2>Departments</h2>
          <p> There are specialized areas within V-Medicare facilities that provide specific types of medical services and support to patients. </p>
        </div>

        <div class="row gy-4">
          <div class="col-lg-3">
            <ul class="nav nav-tabs flex-column">
              <li class="nav-item">
                <a class="nav-link active show" data-bs-toggle="tab" href="#tab-1">Cardiology</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" data-bs-toggle="tab" href="#tab-2">Neurology</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" data-bs-toggle="tab" href="#tab-3">Hepatology</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" data-bs-toggle="tab" href="#tab-4">Pediatrics</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" data-bs-toggle="tab" href="#tab-5">Eye Care</a>
              </li>
            </ul>
          </div>
          <div class="col-lg-9">
            <div class="tab-content">
              <div class="tab-pane active show" id="tab-1">
                <div class="row gy-4">
                  <div class="col-lg-8 details order-2 order-lg-1">
                    <h3>Cardiology</h3>
                    <p class="fst-italic">The human heart is a vital organ that plays a crucial role in maintaining the body's overall health</p>
                    <p>Cardiologists treat include coronary artery disease, heart failure, heart valve disorders, congenital heart defects, and arrhythmias.They educate patients on lifestyle changes that can reduce the risk of developing heart disease, such as quitting smoking, eating a healthy diet, and exercising regularly. </p>
                  </div>
                  <div class="col-lg-4 text-center order-1 order-lg-2">
                    <img src="assets/img/departments-1.jpg" alt="" class="img-fluid">
                  </div>
                </div>
              </div>
              <div class="tab-pane" id="tab-2">
                <div class="row gy-4">
                  <div class="col-lg-8 details order-2 order-lg-1">
                    <h3>Neurology</h3>
                    <p class="fst-italic">Neurology is the branch of medicine that deals with the study of the nervous system, including the brain, spinal cord, and peripheral nerves.</p>
                    <p> Neurologists are medical specialists who diagnose and treat disorders of the nervous system, including diseases that affect the brain, spinal cord, nerves, and muscles.Neurologists use a variety of diagnostic tools, including imaging tests such as CT scans and MRI scans, as well as specialized tests such as electromyography (EMG) and electroencephalography (EEG), to evaluate patients with neurological symptoms. </p>
                  </div>
                  <div class="col-lg-4 text-center order-1 order-lg-2">
                    <img src="assets/img/departments-2.jpg" alt="" class="img-fluid">
                  </div>
                </div>
              </div>
              <div class="tab-pane" id="tab-3">
                <div class="row gy-4">
                  <div class="col-lg-8 details order-2 order-lg-1">
                    <h3>Hepatology</h3>
                    <p class="fst-italic">Hepatology is a branch of medicine that focuses on the study, diagnosis, and treatment of diseases that affect the liver, gallbladder, biliary tree, and pancreas. </p>
                    <p>The liver is the largest internal organ in the body, and it plays a critical role in many bodily functions, including the production of bile, the metabolism of carbohydrates, fats, and proteins, and the detoxification of harmful substances. Some common liver diseases include hepatitis (inflammation of the liver), cirrhosis (scarring of the liver), liver cancer, and fatty liver disease.</p>
                  </div>
                  <div class="col-lg-4 text-center order-1 order-lg-2">
                    <img src="assets/img/departments-3.jpg" alt="" class="img-fluid">
                  </div>
                </div>
              </div>
              <div class="tab-pane" id="tab-4">
                <div class="row gy-4">
                  <div class="col-lg-8 details order-2 order-lg-1">
                    <h3>Pediatrics</h3>
                    <p class="fst-italic">Pediatrics is a branch of medicine that focuses on the medical care of infants, children, and adolescents.</p>
                    <p>Pediatricians are medical specialists who are trained to diagnose and treat a wide range of health conditions that affect children, from minor illnesses to complex medical conditions.Pediatricians provide a wide range of medical services, including routine check-ups, vaccinations, and treatment for acute illnesses such as colds, flu, and infections.</p>
                  </div>
                  <div class="col-lg-4 text-center order-1 order-lg-2">
                    <img src="assets/img/departments-4.jpg" alt="" class="img-fluid">
                  </div>
                </div>
              </div>
              <div class="tab-pane" id="tab-5">
                <div class="row gy-4">
                  <div class="col-lg-8 details order-2 order-lg-1">
                    <h3>Eye Care</h3>
                    <p class="fst-italic">Eye care is the branch of medicine that focuses on the health of the eyes, vision, and related structures.</p>
                    <p> Eye care professionals include optometrists, ophthalmologists, and opticians, who work together to diagnose, treat, and prevent eye conditions and diseases.Optometrists are healthcare professionals who provide primary vision care services, such as prescribing glasses or contact lenses, diagnosing and treating eye conditions, and providing vision therapy. </p>
                  </div>
                  <div class="col-lg-4 text-center order-1 order-lg-2">
                    <img src="assets/img/departments-5.jpg" alt="" class="img-fluid">
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>

      </div>
    </section><!-- End Departments Section -->

    </main><!-- End #main -->

<?php include_once("footer.php");?>
</body>

</html>