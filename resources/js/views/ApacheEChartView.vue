<template>
    <div ref="chart" style="width: 600px; height: 400px;"></div>
</template>

<script>
import { ref, onMounted } from 'vue';
import * as echarts from 'echarts'; // Import echarts library

export default {
    data() {
        return {
            chart: null
        };
    },
    mounted() {
        this.renderChart();
    },
    methods: {
        renderChart() {
            // Initialize the echarts instance based on the prepared dom
            this.chart = echarts.init(this.$refs.chart);

            // Specify the configuration items and data for the chart
            const option = {
                title: {
                    text: 'ECharts Bar Chart Example'
                },
                tooltip: {},
                xAxis: {
                    type: 'category',
                    data: ['Shirts', 'Cardigans', 'Chiffons', 'Pants', 'Heels', 'Socks']
                },
                yAxis: {
                    type: 'value'
                },
                series: [
                    {
                        name: 'Sales',
                        type: 'bar',
                        data: [5, 20, 36, 10, 10, 20]
                    }
                ]
            };

            // Display the chart using the configuration items and data just specified
            this.chart.setOption(option);
        }
    }
};
</script>

<style>
/* Add any necessary styles here */
</style>
