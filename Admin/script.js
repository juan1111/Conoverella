document.addEventListener('DOMContentLoaded', function() {
    // Toggle Sidebar
    const toggleSidebar = document.getElementById('toggle-sidebar');
    const mobileMenu = document.getElementById('mobile-menu');
    const sidebar = document.querySelector('.sidebar');
    const mainContent = document.querySelector('.main-content');
    
    if (toggleSidebar) {
        toggleSidebar.addEventListener('click', function() {
            sidebar.classList.toggle('collapsed');
            mainContent.classList.toggle('expanded');
        });
    }
    
    if (mobileMenu) {
        mobileMenu.addEventListener('click', function() {
            sidebar.classList.toggle('active');
        });
    }
    
    // Close sidebar when clicking outside on mobile
    document.addEventListener('click', function(event) {
        if (window.innerWidth <= 768) {
            if (!sidebar.contains(event.target) && !mobileMenu.contains(event.target)) {
                sidebar.classList.remove('active');
            }
        }
    });
    
    // Revenue Chart
    const revenueChartCtx = document.getElementById('revenue-chart');
    if (revenueChartCtx) {
        const revenueChart = new Chart(revenueChartCtx, {
            type: 'line',
            data: {
                labels: ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sep', 'Oct', 'Nov', 'Dec'],
                datasets: [{
                    label: 'Revenue',
                    data: [12500, 15000, 13800, 16200, 19500, 18300, 21000, 22800, 20500, 23500, 24800, 24780],
                    borderColor: '#4f46e5',
                    backgroundColor: 'rgba(79, 70, 229, 0.1)',
                    tension: 0.4,
                    fill: true
                }]
            },
            options: {
                responsive: true,
                maintainAspectRatio: false,
                plugins: {
                    legend: {
                        display: false
                    },
                    tooltip: {
                        mode: 'index',
                        intersect: false,
                        callbacks: {
                            label: function(context) {
                                let label = context.dataset.label || '';
                                if (label) {
                                    label += ': ';
                                }
                                if (context.parsed.y !== null) {
                                    label += new Intl.NumberFormat('en-US', { style: 'currency', currency: 'USD' }).format(context.parsed.y);
                                }
                                return label;
                            }
                        }
                    }
                },
                scales: {
                    x: {
                        grid: {
                            display: false
                        }
                    },
                    y: {
                        beginAtZero: true,
                        ticks: {
                            callback: function(value) {
                                return '$' + value.toLocaleString();
                            }
                        }
                    }
                }
            }
        });
        
        // Update chart on period change
        const revenuePeriod = document.getElementById('revenue-period');
        if (revenuePeriod) {
            revenuePeriod.addEventListener('change', function() {
                let data;
                if (this.value === 'weekly') {
                    data = [4200, 5100, 4800, 5300, 6200, 5900, 6500];
                    revenueChart.data.labels = ['Mon', 'Tue', 'Wed', 'Thu', 'Fri', 'Sat', 'Sun'];
                } else if (this.value === 'monthly') {
                    data = [12500, 15000, 13800, 16200, 19500, 18300, 21000, 22800, 20500, 23500, 24800, 24780];
                    revenueChart.data.labels = ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sep', 'Oct', 'Nov', 'Dec'];
                } else {
                    data = [156000, 180000, 210000, 240000, 270000];
                    revenueChart.data.labels = ['2019', '2020', '2021', '2022', '2023'];
                }
                revenueChart.data.datasets[0].data = data;
                revenueChart.update();
            });
        }
    }
    
    // Category Chart
    const categoryChartCtx = document.getElementById('category-chart');
    if (categoryChartCtx) {
        const categoryChart = new Chart(categoryChartCtx, {
            type: 'doughnut',
            data: {
                labels: ['Electronics', 'Clothing', 'Accessories', 'Home & Kitchen', 'Others'],
                datasets: [{
                    data: [35, 25, 20, 15, 5],
                    backgroundColor: [
                        '#4f46e5',
                        '#10b981',
                        '#f59e0b',
                        '#3b82f6',
                        '#6b7280'
                    ],
                    borderWidth: 0
                }]
            },
            options: {
                responsive: true,
                maintainAspectRatio: false,
                plugins: {
                    legend: {
                        position: 'bottom',
                        labels: {
                            padding: 20,
                            boxWidth: 12
                        }
                    },
                    tooltip: {
                        callbacks: {
                            label: function(context) {
                                const label = context.label || '';
                                const value = context.parsed || 0;
                                const total = context.dataset.data.reduce((acc, data) => acc + data, 0);
                                const percentage = Math.round((value / total) * 100);
                                return `${label}: ${percentage}%`;
                            }
                        }
                    }
                },
                cutout: '70%'
            }
        });
        
        // Refresh button functionality
        const refreshBtn = document.querySelector('.refresh-btn');
        if (refreshBtn) {
            refreshBtn.addEventListener('click', function() {
                // Simulate data refresh with random values
                const newData = [
                    Math.floor(Math.random() * 30) + 20,
                    Math.floor(Math.random() * 20) + 15,
                    Math.floor(Math.random() * 15) + 15,
                    Math.floor(Math.random() * 10) + 10,
                    Math.floor(Math.random() * 5) + 5
                ];
                categoryChart.data.datasets[0].data = newData;
                categoryChart.update();
                
                // Add a spinning animation to the refresh button
                this.classList.add('spinning');
                setTimeout(() => {
                    this.classList.remove('spinning');
                }, 1000);
            });
        }
    }
    
    // Add spinning animation for refresh button
    document.head.insertAdjacentHTML('beforeend', `
        <style>
            @keyframes spin {
                0% { transform: rotate(0deg); }
                100% { transform: rotate(360deg); }
            }
            .spinning svg {
                animation: spin 1s linear;
            }
        </style>
    `);
});