<template>

<v-range-selector
  :start-date.sync="range.start"
  :end-date.sync="range.end"
/>


</template>

<script>
import VRangeSelector from 'vuelendar/components/vl-range-selector';
import VDaySelector from 'vuelendar/components/vl-day-selector';

export default {
  components: {
    VRangeSelector,
    VDaySelector
  },
  data () {
    return {
      range: {},
      date: null
    }
  }
}
</script>
