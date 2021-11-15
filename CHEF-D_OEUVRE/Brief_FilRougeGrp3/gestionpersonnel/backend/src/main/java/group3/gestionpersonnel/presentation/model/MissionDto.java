/**
 * 
 */
package group3.gestionpersonnel.presentation.model;

import java.util.Date;
import group3.gestionpersonnel.presentation.model.EmployeeDto;

/**
 * This class represents a Mission Data Transfert object.
 * @See group3.gestionpersonnel.persistence.entitties.MissionDo
 * @author Caroline (Group3)
 */
public class MissionDto {
	
	private Long missionId;
	private String missionName;
	private Date missionStartDate;
	private Date missionEndDate;
	private String missionDescription;
	private String missionType;
	private EmployeeDto missionAssignedTo;
	
	/**
	 * Default constructor
	 */
	public MissionDto() {}
	
	/**
	 * Constructor with ID of the object included.
	 * Rather use this constructor than setter if ID provision is required.
	 * @param missionId the ID of the Mission object.
	 */
	public MissionDto(Long missionId) {
		this.missionId = missionId;
	}

	/**
	 * @return the missionId
	 */
	public final Long getMissionId() {
		return missionId;
	}

	/**
	 * @return the missionName
	 */
	public final String getMissionName() {
		return missionName;
	}

	/**
	 * @return the missionStartDate
	 */
	public final Date getMissionStartDate() {
		return missionStartDate;
	}

	/**
	 * @return the missionEndDate
	 */
	public final Date getMissionEndDate() {
		return missionEndDate;
	}

	/**
	 * @return the missionDescription
	 */
	public final String getMissionDescription() {
		return missionDescription;
	}

	/**
	 * @return the missionType
	 */
	public final String getMissionType() {
		return missionType;
	}

	/**
	 * @return the missionAssignedTo
	 */
	public final EmployeeDto getMissionAssignedTo() {
		return missionAssignedTo;
	}

	/**
	 * @param missionId the missionId to set
	 * Rather use the constructor with ID param if possible.
	 */
	public final void setMissionId(final Long missionId) {
		this.missionId = missionId;
	}

	/**
	 * @param missionName the missionName to set
	 */
	public final void setMissionName(final String missionName) {
		this.missionName = missionName;
	}

	/**
	 * @param missionStartDate the missionStartDate to set
	 */
	public final void setMissionStartDate(final Date missionStartDate) {
		this.missionStartDate = missionStartDate;
	}

	/**
	 * @param missionEndDate the missionEndDate to set
	 */
	public final void setMissionEndDate(final Date missionEndDate) {
		this.missionEndDate = missionEndDate;
	}

	/**
	 * @param missionDescription the missionDescription to set
	 */
	public final void setMissionDescription(final String missionDescription) {
		this.missionDescription = missionDescription;
	}

	/**
	 * @param missionType the missionType to set
	 */
	public final void setMissionType(final String missionType) {
		this.missionType = missionType;
	}

	/**
	 * @param missionAssignedTo the missionAssignedTo to set
	 */
	public final void setMissionAssignedTo(final EmployeeDto missionAssignedTo) {
		this.missionAssignedTo = missionAssignedTo;
	}

		
	
	
	
	

}
