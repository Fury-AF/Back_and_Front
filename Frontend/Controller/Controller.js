import DataService from "../Model/DataService.js";

export default class Controller {
  constructor() {
    this.dataService = new DataService();
    this.dataService.getData("investment", this.megjelenit);
  }

  megjelenit(list) {
    console.log(list);
  }
}
