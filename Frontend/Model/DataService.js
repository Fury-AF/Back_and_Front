export default class DataService {
  constructor() {
    //console.log("DataServise");
    axios.defaults.baseURL = "http://localhost:8000/api/";
  }
  getData(vegpont, callback) {
    axios
      .get(vegpont)
      .then(function (response) {
        // handle success
        console.log(response);
        console.log(response.data);
        console.log(response.data);
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
  deleteData(vegpont, id, hibaCallback) {
    axios
      .delete(vegpont + "/" + id)
      .then(function (response) {
        // handle success
        console.log(response);
        console.log(response.data);
        console.log(response.data);
        callback(response.data);
      })
      .catch(function (error) {
        // handle error
        //console.log(error);

        //hiba callback meghívása hiba esetén
        hibaCallback(error);
      })
      .finally(function () {
        // always executed
      });
  }
}
