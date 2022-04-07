import { Injectable } from '@angular/core';
import { HttpClient } from '@angular/common/http'

@Injectable({
  providedIn: 'root'
})
export class PostService {

  constructor(private httpClient:HttpClient) { }
  getPosts(id:number){
    return this.httpClient.get('http://127.0.0.1:8000/api/posts/user_friend'+id);
  }
  // registerUser(data:any){
  //   return this.httpClient.post('http://localhost:8000/api/post', data);
  // }
  postFeed(data:any){
    return this.httpClient.post('http://127.0.0.1:8000/api/posts',data);
  }
}
