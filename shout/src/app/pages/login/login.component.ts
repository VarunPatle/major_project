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
  username: string = "";
  password: string = "";

  submitted = false;
  form: any;
  imagePath = "assets/shouts/login.png"
  constructor(private formBuilder:FormBuilder,public router:Router){
    this.loginForm=formBuilder.group({
    username: new FormControl('',[Validators.required,Validators.minLength(3)]),
    password: new FormControl('',[Validators.required, Validators.maxLength(15)]),
    
    })
  }
  ngOnInit(): void {
  }
  onSubmit() {
    this.submitted=true;
    console.log(this.loginForm.value);
  }
  get PostData(){
    return this.loginForm.controls;
  }
  goToMainPage(){
    this.router.navigate(['main']);
  }

  }
  



