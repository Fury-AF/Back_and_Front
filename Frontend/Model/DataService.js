export default class DataService {
  constructor() {
    console.log("DataServise");
    axios.defaults.baseURL = "http://localhost:8000/api/";
  }
  getData(vegpont, callback) {
    axios
      .get(vegpont)
      .then(function (response) {
        // handle success
        callback(response.data);
      })
      .catch(function (error) {
        // handle error
        console.log(error);
      })
      .finally(function () {
        // always executed
      });


  }
}
