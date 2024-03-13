<template>
        
    <div class="row justify-content-center gap-3">
        <div class="mt-5 weather-container">
            <weather/>
            <h1>Weather App</h1>
            <div>
                <input type="text" id="countryInput" placeholder="Enter country name">
            </div>
            <div>
                <button id="weather-btn" class="btn btn-primary">Get Weather</button>
            </div>
            <div class="result-container">
                <div id="weatherResult"></div>
            </div>
        </div>
    </div>
</template>