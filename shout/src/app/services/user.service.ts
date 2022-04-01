import { Injectable } from '@angular/core';
import { HttpClient } from '@angular/common/http'
@Injectable({
  providedIn: 'root'
})
export class UserService {

  constructor(private httpClient:HttpClient) { }

  getUsers(){
<<<<<<< HEAD
    return this.httpClient.get('http://localhost:8000/api/user');
  }

  registerUser(data:any){
    return this.httpClient.post('http://localhost:8000/api/user', data);
=======
    return this.httpClient.get('http://localhost:8000/api/users');
  }

  registerUser(data:any){
    return this.httpClient.post('http://localhost:8000/api/users', data);
>>>>>>> 1ce23d41b7ef1611cb20d4592a6f8386b20cca69
  }
}
