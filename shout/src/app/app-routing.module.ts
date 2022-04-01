import { NgModule } from '@angular/core';
import { RouterModule, Routes } from '@angular/router';
import { HomeComponent } from './home/home.component';
import { HeaderComponent } from './includes/header/header.component';
import { ContactUsComponent } from './pages/contact-us/contact-us.component';
import { ForgotPasswordComponent } from './pages/forgot-password/forgot-password.component';
import { LoginComponent } from './pages/login/login.component';
import { MainComponent } from './pages/main/main.component';
import { RegisterComponent } from './pages/register/register.component';
<<<<<<< HEAD
=======
import { UsersComponent } from './pages/users/users.component';
>>>>>>> 1ce23d41b7ef1611cb20d4592a6f8386b20cca69

const routes: Routes = [
  { path: 'login', component: LoginComponent },
  { path: 'forgot-password', component: ForgotPasswordComponent },
  { path: 'home', component: HomeComponent },
  { path: '', redirectTo: 'home', pathMatch: 'full' },
  { path: 'contact', component: ContactUsComponent },
  { path: 'register', component: RegisterComponent },
<<<<<<< HEAD
  { path: 'main', component: MainComponent},
  // { path: 'main', component: HeaderComponent },
  { path: 'logout', component: HomeComponent },


  
=======
  { path: 'users', component: UsersComponent },
>>>>>>> 1ce23d41b7ef1611cb20d4592a6f8386b20cca69
];

@NgModule({
  imports: [RouterModule.forRoot(routes)],
  exports: [RouterModule]
})
export class AppRoutingModule { }
