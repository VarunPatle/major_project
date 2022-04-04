import { SharedService } from './../../services/shared.service';
import { UserService } from 'src/app/services/user.service';
import { Component, OnInit } from '@angular/core';
import { Router } from '@angular/router';
import { FormGroup, FormControl, NgForm, Validators, FormBuilder} from '@angular/forms'



@Component({
  selector: 'app-login',
  templateUrl: './login.component.html',
  styleUrls: ['./login.component.scss']
})
export class LoginComponent implements OnInit {
  loginForm: FormGroup;
  token:any;
  user:any;
  logged:string = 'signup';
  email: string = "";
  password: string = "";

  submitted = false;
  form: any;
  imagePath = "assets/shouts/login.png"
  constructor(private formBuilder:FormBuilder,public router:Router, private userService: UserService, private sharedService: SharedService){
    this.loginForm=formBuilder.group({
    email: new FormControl('',[Validators.required,Validators.minLength(3)]),
    password: new FormControl('',[Validators.required, Validators.maxLength(15)]),

    })
  }
  ngOnInit(): void {
  }
  onSubmit() {
    this.submitted=true;
    this.userService.login(this.loginForm.value).subscribe(res => {
      console.log(res);
      if(res!=0){
        this.user = res.user;
        this.token = res.token
        sessionStorage.setItem('user', this.user);
        sessionStorage.setItem('token', this.token);
        this.router.navigate(['main']);
        this.sharedService.setValue(true);
      }else{
        alert("Please enter correct email and password...");
      }
    })

  }


  get PostData(){
    return this.loginForm.controls;
  }


  }




