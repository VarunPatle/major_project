import { Injectable } from '@angular/core';
import { HttpClient } from '@angular/common/http'

@Injectable({
  providedIn: 'root'
})
export class PostService {

  constructor(private httpClient:HttpClient) { }
  // getPosts(){
  //   return this.httpClient.get('http://localhost:8000/posts');
  // }
  // registerUser(data:any){
  //   return this.httpClient.post('http://localhost:8000/api/post', data);
  // }
}
