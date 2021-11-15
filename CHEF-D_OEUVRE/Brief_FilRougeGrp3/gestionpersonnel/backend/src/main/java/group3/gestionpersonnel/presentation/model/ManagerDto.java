package group3.gestionpersonnel.presentation.model;

import java.util.List;


public class ManagerDto {

	private Long managerId;
	private String managerFirstName;
	private String managerLastName;
	private String managerEmail;
	private DepartmentDto managerDepartment;
	private List<EmployeeDto> managedEmployees;
	
	
	public ManagerDto() {
		super();
	}
	
	public ManagerDto(Long managerId) {
		super();
		this.managerId = managerId;
	}
	
	
	
}
