<!doctype html>
<html lang="en" class="no-js">
  <html>
    <head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/dashboard.css" type="text/css">
      </head>
      <body>
		<title>Dashboard</title>
    <div class="sidebar">
      <div class="profile_info">
        <img src="../login/images/logo.jpg" width="150"  alt="CCS COLLECTION FEE">
      </div>
      <a class="active" href="/admin/dashboard.php">Dashboard</a>
      <a href="../fees/fees.php">Fees</a>
      <a href="../remit-records/remit-records.php">Remit Records</a>
      <a href="../colleges/colleges.php">Colleges</a>
      <a href="../funds/funds.php">Funds</a>
      <a href="../financial-report/financial-report.php">Financial Report</a>
      <a href="../audit-log/audit-log.php">Audit log</a>
      <a href="../admin-settings/admin-settings.php">Admin Settings</a>
      <a href="../login/index.php" id='a_logout'> Log Out</a>
    </div>
      </div>
    <div class="content">
      <div class="chartMenu">
      <p><b>Dashboard<b></p>
    </div>
     <div class="chartBox">
        <canvas id="myChart"></canvas>
      </div>
    </div>
    <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <script>


    // setup
    const data = {
      labels: ['College of Agriculture', 'College of Architecture', 
      'College of Asian and Islamic Studies', 'College of Computing Studies', 
      'College of Criminal Justice Education', 
      'College of Engineering', 'College of Forestry and Environmental Studies', 'College of Home Economics', 
      'College of Law', 'College of Liberal Arts', 'College of Nursing',
      'College of Public Administration and Development Studies', 'College of Sports Science and Physical Education',
      'College of Science and Mathematics', 'College of Social Work and Community Deveolpment', 
      'College of Teacher Education'],
      datasets: [{
        label: 'Target: PHP 5,000,000',
        data: [2300000, 2300000, 1500000, 5000000, 3000000, 5000000, 2300000, 2300000, 
        3000000, 1000000, 2300000, 2300000, 1230000, 2300000, 2300000, 3000000],
        borderColor: [
          'rgba(255, 26, 104, 0.2)',
          'rgba(54, 162, 235, 0.2)',
          'rgba(255, 206, 86, 0.2)',
          'rgba(75, 192, 192, 0.2)',
          'rgba(153, 102, 255, 0.2)',
          'rgba(255, 159, 64, 0.2)',
          'rgba(0, 0, 0, 0.2)'
        ],
        backgroundColor: [
          'rgba(255, 26, 104, 1)',
          'rgba(54, 162, 235, 1)',
          'rgba(255, 206, 86, 1)',
          'rgba(75, 192, 192, 1)',
          'rgba(153, 102, 255, 1)',
          'rgba(255, 159, 64, 1)',
          'rgba(0, 0, 0, 1)'
        ],
        borderWidth: 1,
        borderSkipped: false,
        borderRadius: 5,
        barPercentage: 0.2,
        categoryPercentage: 0.9
      }]
    };

    // config block
    const config = {
      type: 'bar',
      data,
      options: {
        maintainAspectRatio: false,
        indexAxis: 'y',
        scales: {
          y: {
            beginAtZero: true
          }
        }
      }
    };

    // render init block
    const myChart = new Chart(
      document.getElementById('myChart'),
      config
    );
    </script>

  </body>
</html>