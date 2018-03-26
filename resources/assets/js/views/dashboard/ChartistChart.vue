<template>
    <div class="col-md-4">
	    <div class="card">
	        <div class="card-header card-chart" :data-background-color="chartData.color">
	            <div class="ct-chart ct-golden-section" id="dailySalesChart">
	            	<chartist
					    ratio="ct-major-second"
					    :type="chartData.type"
					    :data="chartData.chartData"
					    :options="chartData.chartOptions"
					    :event-handlers="eventHandlers">
					</chartist>
				</div>
	        </div>
	        <div class="card-content">
	            <h4 class="title">{{chartData.title}}</h4>
	            <p class="category" v-html="chartData.subtitle"></p>
	        </div>
	        <div class="card-footer">
	            <div class="stats" v-html="chartData.status"></div>
	        </div>
	    </div>
	</div>
</template>

<script>
	export default {
		data () {
			return {
                eventHandlers : [{
                    event: 'draw',
                    fn(data) {

                        if (data.type === 'line' || data.type === 'area') {
	                        data.element.animate({
	                            d: {
	                                begin: 600,
	                                dur: 700,
	                                from: data.path.clone().scale(1, 0).translate(0, data.chartRect.height()).stringify(),
	                                to: data.path.clone().stringify(),
	                                easing: Vue.chartist.Svg.Easing.easeOutQuint
	                            }
	                        });
                    	}
						if (data.type === 'bar') {
		                        // seq2++;
		                        data.element.animate({
		                            opacity: {
		                                begin: 1,
		                                dur: 500,
		                                from: 0,
		                                to: 1,
		                                easing: 'ease'
		                            }
		                        });
		                    }	
					}
                }, {
                    //an other event hander
                }],

			}
		},
		props: ['chartData']
	}
</script>