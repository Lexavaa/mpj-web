<script>
    'use strict';
  
    (function() {
      let cardColor, headingColor, axisColor, shadeColor, borderColor;
  
      cardColor = config.colors.white;
      headingColor = config.colors.headingColor;
      axisColor = config.colors.axisColor;
      borderColor = config.colors.borderColor;
  
      fetch('/api/chart')
        .then(response => response.json())
        .then(data => {
          // Data jumlah_kru dan month
          const jumlahKru = data.data;
          const months = data.labels;
  
          const totalRevenueChartEl = document.querySelector('#revenueChart');
          const totalRevenueChartOptions = {
            series: [{
              name: '2021',
              data: jumlahKru
            }],
            chart: {
              height: 350,
              stacked: true,
              type: 'bar',
              toolbar: {
                show: false
              }
            },
            plotOptions: {
              bar: {
                horizontal: false,
                columnWidth: '30%',
                borderRadius: 12,
                startingShape: 'rounded',
                endingShape: 'rounded'
              }
            },
            colors: [config.colors.primary, config.colors.info],
            dataLabels: {
              enabled: false
            },
            stroke: {
              curve: 'smooth',
              width: 6,
              lineCap: 'round',
              colors: [cardColor]
            },
            legend: {
              show: true,
              horizontalAlign: 'left',
              position: 'top',
              markers: {
                height: 8,
                width: 8,
                radius: 12,
                offsetX: -3
              },
              labels: {
                colors: axisColor
              },
              itemMargin: {
                horizontal: 10
              }
            },
            grid: {
              borderColor: borderColor,
              padding: {
                top: 0,
                bottom: -8,
                left: 20,
                right: 20
              }
            },
            xaxis: {
              categories: months,
              labels: {
                style: {
                  fontSize: '13px',
                  colors: axisColor
                }
              },
              axisTicks: {
                show: false
              },
              axisBorder: {
                show: false
              }
            },
            yaxis: {
              labels: {
                style: {
                  fontSize: '13px',
                  colors: axisColor
                }
              }
            },
            responsive: [{
              breakpoint: 1700,
              options: {
                plotOptions: {
                  bar: {
                    borderRadius: 9,
                    columnWidth: '50%'
                  }
                }
              }
            }, ],
            states: {
              hover: {
                filter: {
                  type: 'none'
                }
              },
              active: {
                filter: {
                  type: 'none'
                }
              }
            }
          };
  
          if (typeof totalRevenueChartEl !== undefined && totalRevenueChartEl !== null) {
            const totalRevenueChart = new ApexCharts(totalRevenueChartEl, totalRevenueChartOptions);
            totalRevenueChart.render();
          }
  
          const spedometerChartEl = document.querySelector('#spedometerChart');
          const spedometerChartOptions = {
            series: [78],
            labels: ['Ngotaq'],
            chart: {
              height: 240,
              type: 'radialBar'
            },
            plotOptions: {
              radialBar: {
                size: 150,
                offsetY: 10,
                startAngle: -150,
                endAngle: 150,
                hollow: {
                  size: '55%'
                },
                track: {
                  background: cardColor,
                  strokeWidth: '100%'
                },
                dataLabels: {
                  name: {
                    offsetY: 15,
                    color: headingColor,
                    fontSize: '15px',
                    fontWeight: '600',
                    fontFamily: 'Public Sans'
                  },
                  value: {
                    offsetY: -25,
                    color: headingColor,
                    fontSize: '22px',
                    fontWeight: '500',
                    fontFamily: 'Public Sans'
                  }
                }
              }
            },
            colors: [config.colors.primary],
            fill: {
              type: 'gradient',
              gradient: {
                shade: 'dark',
                shadeIntensity: 0.5,
                gradientToColors: [config.colors.primary],
                inverseColors: true,
                opacityFrom: 1,
                opacityTo: 0.6,
                stops: [30, 70, 100]
              }
            },
            stroke: {
              dashArray: 5
            },
            grid: {
              padding: {
                top: -35,
                bottom: -10
              }
            },
            states: {
              hover: {
                filter: {
                  type: 'none'
                }
              },
              active: {
                filter: {
                  type: 'none'
                }
              }
            }
          };
  
          if (typeof spedometerChartEl !== 'undefined' && spedometerChartEl !== null) {
            const spedometerChart = new ApexCharts(spedometerChartEl, spedometerChartOptions);
            spedometerChart.render();
          }
  
          const growthChartOptions = {
            chart: {
              height: 80,
              type: 'line',
              toolbar: {
                show: false
              },
              dropShadow: {
                enabled: true,
                top: 10,
                left: 5,
                blur: 3,
                color: config.colors.warning,
                opacity: 0.15
              },
              sparkline: {
                enabled: true
              }
            },
            grid: {
              show: false,
              padding: {
                right: 8
              }
            },
            colors: [config.colors.warning],
            dataLabels: {
              enabled: false
            },
            stroke: {
              width: 5,
              curve: 'smooth'
            },
            series: [{
              data: jumlahKru
            }],
            xaxis: {
              show: false,
              lines: {
                show: false
              },
              labels: {
                show: false
              },
              axisBorder: {
                show: false
              }
            },
            yaxis: {
              show: false
            }
          };
  
          const growthChartEl = document.querySelector('#growthChart');
          const growthChart = new ApexCharts(growthChartEl, growthChartOptions);
          growthChart.render();
  
          const incomeChartEl = document.querySelector('#incomeChart');
          const incomeChartConfig = {
            series: [{
              data: jumlahKru
            }],
            chart: {
              height: 215,
              parentHeightOffset: 0,
              parentWidthOffset: 0,
              toolbar: {
                show: false
              },
              type: 'area'
            },
            dataLabels: {
              enabled: false
            },
            stroke: {
              width: 2,
              curve: 'smooth'
            },
            legend: {
              show: false
            },
            markers: {
              size: 6,
              colors: 'transparent',
              strokeColors: 'transparent',
              strokeWidth: 4,
              discrete: [{
                fillColor: config.colors.white,
                seriesIndex: 0,
                dataPointIndex: 7,
                strokeColor: config.colors.primary,
                strokeWidth: 2,
                size: 6,
                radius: 8
              }],
              hover: {
                size: 7
              }
            },
            colors: [config.colors.primary],
            fill: {
              type: 'gradient',
              gradient: {
                shade: shadeColor,
                shadeIntensity: 0.6,
                opacityFrom: 0.5,
                opacityTo: 0.25,
                stops: [0, 95, 100]
              }
            },
            grid: {
              borderColor: borderColor,
              strokeDashArray: 3,
              padding: {
                top: -20,
                bottom: -8,
                left: -10,
                right: 8
              }
            },
            xaxis: {
              categories: ['', ...months],
              axisBorder: {
                show: false
              },
              axisTicks: {
                show: false
              },
              labels: {
                show: true,
                style: {
                  fontSize: '13px',
                  colors: axisColor
                }
              }
            },
            yaxis: {
              labels: {
                show: false
              },
              min: 10,
              max: 50,
              tickAmount: 4
            }
          };
  
          if (typeof incomeChartEl !== undefined && incomeChartEl !== null) {
            const incomeChart = new ApexCharts(incomeChartEl, incomeChartConfig);
            incomeChart.render();
          }
        })
        .catch(error => {
          console.error('Error fetching chart data:', error);
        });
    })();
  </script>
  