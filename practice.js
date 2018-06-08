class TaskCollector {
  constructor(task=[]){
    this.tasks=tasks;
  }
  perpare() {
    this.tasks.forEach( task =>{
      console.log(this);
    });
}


class task {
  toGulp(){
    console.log('Converting to Gulp');
  }
}

new TaskCollection([
  new task, new task, new task
]).prepare()
