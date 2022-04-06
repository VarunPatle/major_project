import { Component, OnInit } from '@angular/core';

import { PostService } from 'src/app/services/post.service';
import { UserService } from 'src/app/services/user.service';

@Component({
  selector: 'app-main',
  templateUrl: './main.component.html',
  styleUrls: ['./main.component.scss']
})
export class MainComponent implements OnInit {
  posts: any;
  post:any;
  user:any;
  username:string;
  constructor(private postService: PostService) { }

  ngOnInit(): void {
    this.user = JSON.parse(sessionStorage.user);
    this.username = this.user.name;
  }
  getUsersData(){
    // this.postService.getPosts().subscribe(res => {
    //   this.posts = res;
    // })
  }



}
