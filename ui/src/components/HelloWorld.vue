<template>
  <div class="hello">
    <h1>{{ msg }}</h1>
    <h2>{{ apiResponse }}</h2>
  </div>
</template>

<script>
export default {
  name: 'HelloWorld',
  props: {
    msg: String
  },
  methods: {
    getApi: async () => {
      const response = await fetch('http://localhost:90/api/v1/health-check');
      console.log(response);

      return response.status;
    }
  },
  data() {
    return {
      apiResponse: this.getApi()
    }
  },
  mounted() {
    

    //this.msg = response.status;
  }
}
</script>

<!-- Add "scoped" attribute to limit CSS to this component only -->
<style scoped>
h3 {
  margin: 40px 0 0;
}
ul {
  list-style-type: none;
  padding: 0;
}
li {
  display: inline-block;
  margin: 0 10px;
}
a {
  color: #42b983;
}
</style>
