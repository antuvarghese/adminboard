<?php 
    $currentPage = 'dashboard.php';
    include("header.php");

    ?> 




      <!-- content goes here -->

      <div class="container-fluid fill-100">
      <h2 id="ch2" class="">Dashboard</h2>
      <hr>
      <h5>Server Resources</h5>

      <div class="row">

        <div class="col-lg-3 col-md-6 ml-5">
            <div class="card-body">

              <canvas id="cpu-chart"></canvas>
  
    <script>
    
  
      // Fetch CPU usage data from the PHP endpoint
      function fetchCPUUsage() {
        fetch('https://test.flexicloudhosting.com/server-resources.php') // Replace with the appropriate PHP endpoint
          .then(response => response.json())
          .then(data => {
            // Update the chart
            updatecpuChart(data.cpuUsage);
          })
          .catch(error => console.error('Error fetching CPU usage:', error));
      }
  
      // Initialize the chart
      function initializecpuChart() {
        var ctx = document.getElementById('cpu-chart').getContext('2d');
  
        window.cpuChart = new Chart(ctx, {
          type: 'doughnut',
          data: {
            labels: ['CPU Usage'],
            datasets: [{
              data: [0, 100],
              backgroundColor: ['#FF6384', '#E0E0E0'],
              hoverBackgroundColor: ['#FF6384', '#E0E0E0'],
            }],
          },
          options: {
            cutoutPercentage: 50,
            tooltips: { enabled: false },
            events: [], // Disable hover events
            animation: { duration: 0 },
            legend: { display: false }
          }
        });
      }
  
      // Update the chart with CPU usage data
        function updatecpuChart(cpuUsage) {
        var width = this.cpuChart.width,
          height = this.cpuChart.height,
          ctx = this.cpuChart.ctx;
        const remainingSpace = 100 - cpuUsage;
        window.cpuChart.data.datasets[0].data = [cpuUsage, remainingSpace];
        window.cpuChart.update();
        ctx.restore();
        var fontSize = (height / 120).toFixed(2);
        ctx.font = fontSize + "em verdana";
        ctx.textBaseline = "middle";
        ctx.fillStyle = "#FF6384";
  
        var text = cpuUsage + "%",
            textX = Math.round((width - ctx.measureText(text).width) / 2),
            textY = height / 1.8;
  
        ctx.fillText(text, textX, textY);
        ctx.save();
      }
      
  
  
  
     
      fetchCPUUsage();
  
      // Fetch CPU usage data initially and every 5 seconds
      setInterval(fetchCPUUsage, 5000);
  
      // Initialize the chart and make the initial fetch
      initializecpuChart();
      
    </script>
            </div>
        </div>

        <div class="col-lg-3 col-md-6 ml-5">
          <div class="card-body">

              <canvas id="memory-chart"></canvas>
  
    <script>
    
  
      // Fetch CPU usage data from the PHP endpoint
      function fetchMemoryUsage() {
        fetch('https://test.flexicloudhosting.com/server-resources.php') // Replace with the appropriate PHP endpoint
          .then(response => response.json())
          .then(data => {
            // Update the chart
            updatememChart(data.memoryUsage);
          })
          .catch(error => console.error('Error fetching CPU usage:', error));
      }
  
      // Initialize the chart
      function initializememChart() {
        var ctx = document.getElementById('memory-chart').getContext('2d');
        window.memoryChart = new Chart(ctx, {
          type: 'doughnut',
          data: {
            labels: ['Memory Usage'],
            datasets: [{
              data: [0, 100],
              backgroundColor: ['#24ed9d', '#E0E0E0'],
              hoverBackgroundColor: ['#FF6384', '#E0E0E0'],
            }],
          },
          options: {
            cutoutPercentage: 50,
            tooltips: { enabled: false },
            events: [], // Disable hover events
            animation: { duration: 0 },
            legend: { display: false }
          }
        });
      }
  
      // Update the chart with CPU usage data
        function updatememChart(memoryUsage) {
        var width = this.memoryChart.width,
          height = this.memoryChart.height,
          ctx = this.memoryChart.ctx;
        const remainingSpace = 100 - memoryUsage;
        window.memoryChart.data.datasets[0].data = [memoryUsage, remainingSpace];
        window.memoryChart.update();
        ctx.restore();
        var fontSize = (height / 120).toFixed(2);
        ctx.font = fontSize + "em verdana";
        ctx.textBaseline = "middle";
        ctx.fillStyle = "#24ed9d";
  
        var text = memoryUsage + "%",
            textX = Math.round((width - ctx.measureText(text).width) / 2),
            textY = height / 1.8;
  
        ctx.fillText(text, textX, textY);
        ctx.save();
      }
      
     
      fetchMemoryUsage();
  
      // Fetch CPU usage data initially and every 5 seconds
      setInterval(fetchMemoryUsage, 5000);
  
      // Initialize the chart and make the initial fetch
      initializememChart();
      
    </script>

            </div>
        </div>

        <div class="col-lg-3 col-md-6 ml-5">
          <div class="card-body">

              <canvas id="disk-chart"></canvas>
  
    <script>
    
  
      // Fetch CPU usage data from the PHP endpoint
      function fetchdiskUsage() {
        fetch('https://test.flexicloudhosting.com/server-resources.php') // Replace with the appropriate PHP endpoint
          .then(response => response.json())
          .then(data => {
            // Update the chart
            updatediskChart(data.diskUsage);
          })
          .catch(error => console.error('Error fetching CPU usage:', error));
      }
  
      // Initialize the chart
      function initializediskChart() {
        var ctx = document.getElementById('disk-chart').getContext('2d');
        window.diskChart = new Chart(ctx, {
          type: 'doughnut',
          data: {
            labels: ['Disk Usage'],
            datasets: [{
              data: [0, 100],
              backgroundColor: ['orange', '#E0E0E0'],
              hoverBackgroundColor: ['#FF6384', '#E0E0E0'],
            }],
          },
          options: {
            cutoutPercentage: 50,
            tooltips: { enabled: false },
            events: [], // Disable hover events
            animation: { duration: 0 },
            legend: { display: false }
          }
        });
      }
  
      // Update the chart with CPU usage data
        function updatediskChart(diskUsage) {
        var width = this.diskChart.width,
          height = this.diskChart.height,
          ctx = this.diskChart.ctx;
        const remainingSpace = 100 - diskUsage;
        window.diskChart.data.datasets[0].data = [diskUsage, remainingSpace];
        window.diskChart.update();
        ctx.restore();
        var fontSize = (height / 120).toFixed(2);
        ctx.font = fontSize + "em verdana";
        ctx.textBaseline = "middle";
        ctx.fillStyle = "orange";
  
        var text = diskUsage + "%",
            textX = Math.round((width - ctx.measureText(text).width) / 2),
            textY = height / 1.8;
  
        ctx.fillText(text, textX, textY);
        ctx.save();
      }
      
     
      fetchdiskUsage();
  
      // Fetch CPU usage data initially and every 5 seconds
      setInterval(fetchdiskUsage, 5000);
  
      // Initialize the chart and make the initial fetch
      initializediskChart();
      
    </script>

            </div>
        </div>

        </div>
      </div>

       <hr>

        <div class="container-fluid">
          <div class="row">
            <div class="col-lg-4 col-md-6 p-2">
              <div class="card-body bg-mgray d-flex justify-content-center pbox">
              <a href="users.php">
                <span class="icon text-gray"><i class="fa fa-users"></i></span>
                <span class="text-gray text-center ml-2">USERS</span>
              </a>
              </div>             
            </div>

            <div class="col-lg-4 col-md-6 p-2"> 
            <div class="card-body bg-mgray d-flex justify-content-center pbox">
              <a href="websites.php">
                <span class="icon text-gray"><i class="fa fa-globe"></i></span>
                <span class="text-gray text-center ml-2">WEBSITES</span>
              </a>
              </div>
            </div>

            <div class="col-lg-4 col-md-6 p-2"> 
              <div class="card-body h-100 bg-mgray d-flex justify-content-center">
                <span class="icon text-gray"><i class="fa fa-cubes"></i></span>
                <span class="text-gray text-center ml-2">ACCOUNTS</span>
              </div>
            </div>
        </div>
        
                <div class="row">
                  <div class="col-lg-4 col-md-6 p-2">      
                    <div class="card-body bg-mgray d-flex justify-content-center pbox">
                    <a href="databases.php">
                      <span class="icon text-gray"><i class="fa fa-database"></i></span>
                      <span class="text-gray text-center ml-2">DATABASES</span>
                    </a>      
                    </div>     
                  </div>    
                <div class="col-lg-4 col-md-6 p-2">        
                  <div class="card-body bg-mgray d-flex justify-content-center pbox">
                    <a href="wordpress.php">
                    <span class="icon text-gray"><i class="fab fa-wordpress"></i></span>
                    <span class="text-gray text-center ml-2">WORDPRESS</span>
                  </a>
                  </div>  
                </div>    
                <div class="col-lg-4 col-md-6 p-2">                    
                  <div class="card-body bg-mgray d-flex justify-content-center pbox">
                    <span class="icon text-gray"><i class="fab fa-php"></i></span>
                    <span class="text-gray text-center ml-2">PHP</span>
                  </div>  
                </div>

            <div class="container-fluid">
                <div class="row">
    
                    <div class="col-lg-4 col-md-6 p-2">                           
                      <div class="card-body bg-mgray d-flex justify-content-center pbox">
                        <span class="icon text-gray"><i class="fas fa-file"></i></span>
                        <span class="text-gray text-center ml-2">CONFIG</span>
                      </div>
                </div>
    
                <div class="col-lg-4 col-md-6 p-2">                        
                  <div class="card-body bg-mgray d-flex justify-content-center pbox">
                    <span class="icon text-gray"><i class="fas fa-upload"></i></span>
                    <span class="text-gray text-center ml-2">FTP</span>
                  </div>
                </div>
    
                <div class="col-lg-4 col-md-6 p-2">                    
                  <div class="card-body bg-mgray d-flex justify-content-center pbox">
                    <span class="icon text-gray"><i class="fas fa-wrench"></i></span>
                    <span class="text-gray text-center ml-2">MANAGE</span>
                  </div>
                </div>
            </div>


  

    </div>

    <div class="container-fluid p-4">
      
    </div>

</body>

</html>