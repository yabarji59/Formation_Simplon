import { NgModule } from '@angular/core';
import { BrowserModule } from '@angular/platform-browser';

import { AppRoutingModule } from './app-routing.module';
import { AppComponent } from './app.component';
import { LandingComponent } from './components/landing/landing.component';
import { EmployeeListComponent } from './components/employee/employee-list/employee-list.component';
import { EmployeeDetailComponent } from './components/employee/employee-detail/employee-detail.component';
import { EmployeeFormComponent } from './components/employee/employee-form/employee-form.component';
import { ManagerListComponent } from './components/manager/manager-list/manager-list.component';
import { ManagerDetailComponent } from './components/manager/manager-detail/manager-detail.component';
import { DepartmentDetailComponent } from './components/department/department-detail/department-detail.component';
import { DepartmentFormComponent } from './components/department/department-form/department-form.component';
import { DepartmentListComponent } from './components/department/department-list/department-list.component';
import { MissionDetailComponent } from './components/mission/mission-detail/mission-detail.component';
import { MissionFormComponent } from './components/mission/mission-form/mission-form.component';
import { MissionListComponent } from './components/mission/mission-list/mission-list.component';


@NgModule({
  declarations: [
    AppComponent,
    LandingComponent,
    EmployeeListComponent,
    EmployeeDetailComponent,
    EmployeeFormComponent,
    ManagerListComponent,
    ManagerDetailComponent,
    DepartmentDetailComponent,
    DepartmentFormComponent,
    DepartmentListComponent,
    MissionDetailComponent,
    MissionFormComponent,
    MissionListComponent,
  ],
  imports: [
    BrowserModule,
    AppRoutingModule
  ],
  providers: [],
  bootstrap: [AppComponent]
})
export class AppModule { }
