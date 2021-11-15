package group3.gestionpersonnel.presentation.model;


public class EmployeeDto {
	
	private Long employeeId;
	private String employeeFirstName;
	private String employeeLastName;
	private String employeeMail;
	private String employeePosition;
	private ManagerDto employeeManagedBy;
	private MissionDto employeeMission;
	
	
	public EmployeeDto() {
		super();
	}
	
	public EmployeeDto(Long employeeId) {
		super();
		this.employeeId = employeeId;
	}
	
	

}
