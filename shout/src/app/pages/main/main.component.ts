import { Component, OnInit } from '@angular/core';
import { FormGroup, FormControl, NgForm, Validators, FormBuilder} from '@angular/forms'
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
  searchedUser:any;
  username:string;
  loginForm: FormGroup;
  constructor(private userService: UserService, private formBuilder:FormBuilder) {
    
  }

  ngOnInit(): void {
    this.user = JSON.parse(sessionStorage.user);
    this.username = this.user.name;
  }
  searchUser(){
    console.log();
    this.userService.searchUser(this.searchedUser).subscribe(res => {
      this.searchedUser = res;
    });
  }



}
