let btn = document.querySelector("#btn");
let sidebar = document.querySelector(".sidebar");
let searchBtn = document.querySelector(".bx-search");

btn.onclick = function(){
    sidebar.classList.toggle("active");
}
searchBtn.onclick = function(){
    sidebar.classList.toggle("active");
}



// ---------- CHARTS ----------

// BAR CHART
let barChartOptions = {
    series: [
      {
        data: [10, 8, 6, 4, 2],
      },
    ],
    chart: {
      type: 'bar',
      height: 350,
      toolbar: {
        show: false,
      },
    },
    colors: ['#246dec', '#cc3c43', '#367952', '#f5b74f', '#4f35a1'],
    plotOptions: {
      bar: {
        distributed: true,
        borderRadius: 4,
        horizontal: false,
        columnWidth: '40%',
      },
    },
    dataLabels: {
      enabled: false,
    },
    legend: {
      show: false,
    },
    xaxis: {
      categories: ['SkinCare', 'HairCare', 'Makeup', 'lipsBalm', 'Scrub'],
    },
    yaxis: {
      title: {
        text: 'Count',
      },
    },
  };
  
  let barChart = new ApexCharts(
    document.querySelector('#bar-chart'),
    barChartOptions
  );
  barChart.render();
  
  // AREA CHART
  let areaChartOptions = {
    series: [
      {
        name: 'Purchase Orders',
        data: [31, 40, 28, 51, 42, 109, 100],
      },
      {
        name: 'Sales Orders',
        data: [11, 32, 45, 32, 34, 52, 41],
      },
    ],
    chart: {
      height: 350,
      type: 'area',
      toolbar: {
        show: false,
      },
    },
    colors: ['#4f35a1', '#246dec'],
    dataLabels: {
      enabled: false,
    },
    stroke: {
      curve: 'smooth',
    },
    labels: ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul'],
    markers: {
      size: 0,
    },
    yaxis: [
      {
        title: {
          text: 'Purchase Orders',
        },
      },
      {
        opposite: true,
        title: {
          text: 'Sales Orders',
        },
      },
    ],
    tooltip: {
      shared: true,
      intersect: false,
    },
  };
  
  let areaChart = new ApexCharts(
    document.querySelector('#area-chart'),
    areaChartOptions
  );
  areaChart.render();





  let newChart1Options = {
    series: [
      {
        name: 'Data 1',
        data: [20, 30, 40, 50, 60],
      },
      {
        name: 'Data 2',
        data: [15, 25, 35, 45, 55],
      },
    ],
    chart: {
      height: 350,
      type: 'line',
      toolbar: {
        show: false,
      },
    },
    colors: ['#f5b74f', '#cc3c43'],
    dataLabels: {
      enabled: false,
    },
    stroke: {
      curve: 'smooth',
    },
    xaxis: {
      categories: ['A', 'B', 'C', 'D', 'E'],
    },
    yaxis: {
      title: {
        text: 'Values',
      },
    },
  };
  
  let newChart1 = new ApexCharts(
    document.querySelector('#new-chart-1'),
    newChart1Options
  );
  newChart1.render();
  
  // NEW CHART 2
  let newChart2Options = {
    series: [44, 55, 41, 64, 22],
    chart: {
      height: 350,
      type: 'donut',
    },
    labels: ['Team A', 'Team B', 'Team C', 'Team D', 'Team E'],
    colors: ['#246dec', '#cc3c43', '#367952', '#f5b74f', '#4f35a1'],
    legend: {
      show: false,
    },
  };
  
  let newChart2 = new ApexCharts(
    document.querySelector('#new-chart-2'),
    newChart2Options
  );
  newChart2.render();



  
  