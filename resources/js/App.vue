<template>
  <div class="row justify-content-center">
    <div class="mt-5 weather-container">
      <h1>Weather App</h1>
      <input class="br-1" type="text" placeholder="Enter country" v-model="country">
      
      <button class="btn btn-primary btn-large px-5 py-2" @click="fetchWeather">Get Weather</button>
      
      <div class="result-container">
        <div v-if="weatherData">
          <div v-for="(weather, index) in weatherData" :key="index">
            <h3>{{weather.name}}, {{weather.sys.country}}  </h3>
            <span class="text-dark">{{ (weather.main.temp - 273.15).toFixed(0) }} °C</span>
            <p>Weather: {{weather.weather[0].main}}</p>
          </div>
        </div>
      </div>
    </div>
  </div>
</template>

<script>
export default {
  data() {
    return {
      country: '',
      apiKey: import.meta.env.VITE_APP_WEATHER_API_KEY,
      weatherData: null,
      error: null
    };
  },
  methods: {
    fetchWeather() {
      const apiUrl = `https://api.openweathermap.org/data/2.5/weather?q=${this.country}&appid=${this.apiKey}`;

      fetch(apiUrl)
        .then(response => {
          if (!response.ok) {
            throw new Error('Network response was not ok');
          }
          return response.json();
        })
        .then(data => {
          console.log(data);
          this.weatherData = [data]; // Wrap single result in an array
          this.error = null;
        })
        .catch(error => {
          this.error = error.message;
          console.error('There was a problem with the fetch operation:', error);
        });
    }
  },
}
</script>

<style scoped>

* {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
}

.weather-container {
    width: 500px;
    height: 500px;
    display: flex;
    align-items: center;
    justify-content: center;
    flex-direction: column;
    gap: 30px;
}

input {
    padding: 15px;
}

.result-container {
    border: 2px solid grey;
    height: 400px;
    width: 400px;
    padding: 15px;
}

.br-1{
  border-radius: 8px;
}


</style>