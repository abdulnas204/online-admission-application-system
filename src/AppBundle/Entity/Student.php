<?php
// src/AppBundle/Entity/Product.php
namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;
use Symfony\Bridge\Doctrine\Validator\Constraints\UniqueEntity;
/**
* @ORM\Entity
* @ORM\Table(name="studenttbl")
* @UniqueEntity(fields="email", message="Email already taken")
*/
class Student
{
    /**
    * @ORM\Column(type="integer")
    * @ORM\Id
    * @ORM\GeneratedValue(strategy="AUTO")
    */
    private $id;
    
    /**
    * @ORM\Column(type="string", length=100, unique=true)
     * @Assert\NotBlank(groups={"val2", "strict3"},message="Provide Student's Application Number")
    */
    private $app_no;
    
    /**
    * @ORM\Column(type="string", length=100)
    * @Assert\NotBlank(groups={"reg", "strict","strict2", "strict3"}, message = "Choose your programme of study.")
     * 
    */
    private $programme;
    
    /**
    * @ORM\Column(type="string", length=100)
     * @Assert\NotBlank(groups={"reg", "strict", "strict2", "strict3"}, message = "Choose your course of study.")
    */
    private $course;
    
    /**
    * @ORM\Column(type="string", length=100)
     * @Assert\NotBlank(groups={"reg", "strict", "strict2", "strict3"}, message="Provide your surname.")
    */
    private $surname;
    
    /**
    * @ORM\Column(type="string", length=100, nullable=true)
    */
    private $othername;
    
    /**
    * @ORM\Column(type="string", length=100)
     * @Assert\NotBlank(groups={"reg", "strict","strict2", "strict3"}, message = "Provide your firstname.")
    */
    private $firstname;
    
    /**
    * @ORM\Column(type="string", length=100, nullable=true)
     * @Assert\NotBlank(groups={"reg", "strict","strict2"}, message = "Provide your mobile number.")
    */
    private $mobile;
    
    /**
    * @ORM\Column(type="string", length=100, unique=true)
     * @Assert\NotBlank(groups={"reg", "login", "strict", "val", "strict3"}, message = "Provide your email address.")
     * @Assert\Email(groups={"reg", "login", "strict","strict2", "val", "strict3"}, message = "Provide a valid email address.")
    */
    private $email;
    
    /**
    * @ORM\Column(type="string", length=100)
    * @Assert\NotBlank(groups={"reg", "login"}, message = "Provide your password.")
    * @Assert\Length(max=50, min=5, groups={"reg", "login"})
    */
    private $password;
    
    /**
    * @ORM\Column(type="string", length=100, nullable=true)
     * @Assert\NotBlank(groups={"strict","strict2"},message = "Provide your date of birth.")
    */
    private $dob;
    
    /**
    * @ORM\Column(type="string", nullable=true)
     * @Assert\NotBlank(groups={"strict","strict2", "strict3"}, message = "Provide your gender.")
    */
    private $sex;
    
    /**
    * @ORM\Column(type="string", length=100, nullable=true)
     * @Assert\NotBlank(groups={"reg", "strict","strict2", "strict3"} , message = "Choose your state of origin.")
    */
    private $state;
    
    /**
    * @ORM\Column(type="string", length=100, nullable=true)
     * @Assert\NotBlank(groups={"strict","strict2"},message = "Provide your hometown name.")
    */
    private $hometown;
    
    /**
    * @ORM\Column(type="string", length=100, nullable=true)
     * @Assert\NotBlank(groups={"strict","strict2", "strict3"},message = "Provide your marital status.")
    */
    private $mstatus;
    
    /**
    * @ORM\Column(type="string", length=100, nullable=true)
     * @Assert\NotBlank(groups={"strict","strict2"},message = "Specify any disability. if none, write nill.")
    */
    private $disability;
    
    /**
    * @ORM\Column(type="string", length=100, nullable=true)
     * @Assert\NotBlank(groups={"strict","strict2"},message = "Provide your residential address.")
    */
    private $address;
    
    /**
    * @ORM\Column(type="string", length=250, nullable=true)
     * @Assert\NotBlank(groups={"strict","strict2"},message = "Provide your next of kin surname.")
    */
    private $nxtsname;
    
    /**
    * @ORM\Column(type="string", length=100, nullable=true)
     * 
    */
    private $nxtoname;
    
    /**
    * @ORM\Column(type="string", length=100, nullable=true)
     * @Assert\NotBlank(groups={"strict","strict2"},message = "Provide your next of kin firstname.")
    */
    private $nxtfname;
    
    /**
    * @ORM\Column(type="string", length=100, nullable=true)
     * @Assert\NotBlank(groups={"strict","strict2"},message = "Provide your next of kin mobile number.")
    */
    private $nxtmobile;
    
    /**
    * @ORM\Column(type="string", length=100, nullable=true)
     * @Assert\NotBlank(groups={"strict","strict2"},message = "Provide your relationship with next of kin.")
    */
    private $nxtrel;
    
    /**
    * @ORM\Column(type="string", length=100, nullable=true)
     * 
    */
    private $extra_act;
    
    /**
    * @ORM\Column(type="string", length=100, nullable=true)
     * @Assert\NotBlank(groups={"strict","strict2"},message = "Provide your means of scholarship.")
    */
    private $scholarship_means;
    
    /**
    * @ORM\Column(type="string", length=100, nullable=true)
     * @Assert\NotBlank(groups={"strict","strict2"},message = "Provide your scholarship donor.")
    */
    private $scholarship_donor_name;
    
    /**
    * @ORM\Column(type="string", length=100, nullable=true)
     * @Assert\NotBlank(groups={"strict"},message = "Upload your passport.")
     * @Assert\Image(groups={"strict"},minWidth=150, maxWidth=200, minHeight=150, maxHeight=200)
    */
    private $passport;

    
    /**
    * @ORM\Column(type="string", length=100, nullable=true)
     * @Assert\NotBlank(groups={"strict","strict2", "strict3"},message = "Provide your Institution Name.")
    */
    private $inst_name;
    
    /**
    * @ORM\Column(type="string", length=100, nullable=true)
     * @Assert\NotBlank(groups={"strict","strict2"},message = "Provide your Institution Location.")
    */
    private $location;
    
    /**
    * @ORM\Column(type="string", length=100, nullable=true)
     * @Assert\NotBlank(groups={"strict","strict2", "strict3"},message = "Provide your Institution Registration Number.")
    */
    private $reg_no;
    
    /**
    * @ORM\Column(type="string", length=100, nullable=true)
     * @Assert\NotBlank(groups={"strict","strict2"},message = "Provide your Date of Graduation.")
    */
    private $date_of_grad;
    
    /**
    * @ORM\Column(type="string", length=100, nullable=true)
     * @Assert\NotBlank(groups={"strict","strict2", "strict3"},message = "Provide your Qualification.")
    */
    private $qual;
    
    /**
    * @ORM\Column(type="string", length=100, nullable=true)
     * @Assert\NotBlank(groups={"strict","strict2", "strict3"},message = "Provide your Field of Study.")
    */
    private $field;
    
    /**
     * Get appNo
     *
     * @return integer
     */
    public function getAppNo()
    {
        return $this->app_no;
    }
    
    public function getID()
    {
        return $this->id;
    }

    /**
     * Set programme
     *
     * @param string $programme
     *
     * @return Student
     */
    
    
    public function setProgramme($programme)
    {
        $this->programme = $programme;

        return $this;
    }

    /**
     * Get programme
     *
     * @return string
     */
    public function getProgramme()
    {
        return $this->programme;
    }

    /**
     * Set course
     *
     * @param string $course
     *
     * @return Student
     */
    public function setCourse($course)
    {
        $this->course = $course;

        return $this;
    }

    /**
     * Get course
     *
     * @return string
     */
    public function getCourse()
    {
        return $this->course;
    }

    /**
     * Set surname
     *
     * @param string $surname
     *
     * @return Student
     */
    public function setSurname($surname)
    {
        $this->surname = $surname;

        return $this;
    }

    /**
     * Get surname
     *
     * @return string
     */
    public function getSurname()
    {
        return $this->surname;
    }

    /**
     * Set othername
     *
     * @param string $othername
     *
     * @return Student
     */
    public function setOthername($othername)
    {
        $this->othername = $othername;

        return $this;
    }

    /**
     * Get othername
     *
     * @return string
     */
    public function getOthername()
    {
        return $this->othername;
    }

    /**
     * Set firstname
     *
     * @param string $firstname
     *
     * @return Student
     */
    public function setFirstname($firstname)
    {
        $this->firstname = $firstname;

        return $this;
    }

    /**
     * Get firstname
     *
     * @return string
     */
    public function getFirstname()
    {
        return $this->firstname;
    }

    /**
     * Set mobile
     *
     * @param string $mobile
     *
     * @return Student
     */
    public function setMobile($mobile)
    {
        $this->mobile = $mobile;

        return $this;
    }

    /**
     * Get mobile
     *
     * @return string
     */
    public function getMobile()
    {
        return $this->mobile;
    }

    /**
     * Set email
     *
     * @param string $email
     *
     * @return Student
     */
    public function setEmail($email)
    {
        $this->email = $email;

        return $this;
    }

    /**
     * Get email
     *
     * @return string
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * Set passowrd
     *
     * @param string $passowrd
     *
     * @return Student
     */
    public function setPassword($passowrd)
    {
        $this->password = $passowrd;

        return $this;
    }

    /**
     * Get passowrd
     *
     * @return string
     */
    public function getPassword()
    {
        return $this->password;
    }

    /**
     * Set dob
     *
     * @param \DateTime $dob
     *
     * @return Student
     */
    public function setDob($dob)
    {
        $this->dob = $dob;

        return $this;
    }

    /**
     * Get dob
     *
     * @return \DateTime
     */
    public function getDob()
    {
        return $this->dob;
    }

    /**
     * Set sex
     *
     * @param string $sex
     *
     * @return Student
     */
    public function setSex($sex)
    {
        $this->sex = $sex;

        return $this;
    }

    /**
     * Get sex
     *
     * @return string
     */
    public function getSex()
    {
        return $this->sex;
    }

    /**
     * Set state
     *
     * @param string $state
     *
     * @return Student
     */
    public function setState($state)
    {
        $this->state = $state;

        return $this;
    }

    /**
     * Get state
     *
     * @return string
     */
    public function getState()
    {
        return $this->state;
    }

    /**
     * Set hometown
     *
     * @param string $hometown
     *
     * @return Student
     */
    public function setHometown($hometown)
    {
        $this->hometown = $hometown;

        return $this;
    }

    /**
     * Get hometown
     *
     * @return string
     */
    public function getHometown()
    {
        return $this->hometown;
    }

    /**
     * Set mstatus
     *
     * @param string $mstatus
     *
     * @return Student
     */
    public function setMstatus($mstatus)
    {
        $this->mstatus = $mstatus;

        return $this;
    }

    /**
     * Get mstatus
     *
     * @return string
     */
    public function getMstatus()
    {
        return $this->mstatus;
    }

    /**
     * Set disability
     *
     * @param string $disability
     *
     * @return Student
     */
    public function setDisability($disability)
    {
        $this->disability = $disability;

        return $this;
    }

    /**
     * Get disability
     *
     * @return string
     */
    public function getDisability()
    {
        return $this->disability;
    }

    /**
     * Set address
     *
     * @param string $address
     *
     * @return Student
     */
    public function setAddress($address)
    {
        $this->address = $address;

        return $this;
    }

    /**
     * Get address
     *
     * @return string
     */
    public function getAddress()
    {
        return $this->address;
    }

    /**
     * Set nxtsname
     *
     * @param string $nxtsname
     *
     * @return Student
     */
    public function setNxtsname($nxtsname)
    {
        $this->nxtsname = $nxtsname;

        return $this;
    }

    /**
     * Get nxtsname
     *
     * @return string
     */
    public function getNxtsname()
    {
        return $this->nxtsname;
    }

    /**
     * Set nxtoname
     *
     * @param string $nxtoname
     *
     * @return Student
     */
    public function setNxtoname($nxtoname)
    {
        $this->nxtoname = $nxtoname;

        return $this;
    }

    /**
     * Get nxtoname
     *
     * @return string
     */
    public function getNxtoname()
    {
        return $this->nxtoname;
    }

    /**
     * Set nxtfname
     *
     * @param string $nxtfname
     *
     * @return Student
     */
    public function setNxtfname($nxtfname)
    {
        $this->nxtfname = $nxtfname;

        return $this;
    }

    /**
     * Get nxtfname
     *
     * @return string
     */
    public function getNxtfname()
    {
        return $this->nxtfname;
    }

    /**
     * Set nxtmobile
     *
     * @param string $nxtmobile
     *
     * @return Student
     */
    public function setNxtmobile($nxtmobile)
    {
        $this->nxtmobile = $nxtmobile;

        return $this;
    }

    /**
     * Get nxtmobile
     *
     * @return string
     */
    public function getNxtmobile()
    {
        return $this->nxtmobile;
    }

    /**
     * Set nxtrel
     *
     * @param string $nxtrel
     *
     * @return Student
     */
    public function setNxtrel($nxtrel)
    {
        $this->nxtrel = $nxtrel;

        return $this;
    }

    /**
     * Get nxtrel
     *
     * @return string
     */
    public function getNxtrel()
    {
        return $this->nxtrel;
    }

    /**
     * Set extraAct
     *
     * @param string $extraAct
     *
     * @return Student
     */
    public function setExtraAct($extraAct)
    {
        $this->extra_act = $extraAct;

        return $this;
    }

    /**
     * Get extraAct
     *
     * @return string
     */
    public function getExtraAct()
    {
        return $this->extra_act;
    }

    /**
     * Set scholarshipMeans
     *
     * @param string $scholarshipMeans
     *
     * @return Student
     */
    public function setScholarshipMeans($scholarshipMeans)
    {
        $this->scholarship_means = $scholarshipMeans;

        return $this;
    }

    /**
     * Get scholarshipMeans
     *
     * @return string
     */
    public function getScholarshipMeans()
    {
        return $this->scholarship_means;
    }

    /**
     * Set scholarshipDonorName
     *
     * @param string $scholarshipDonorName
     *
     * @return Student
     */
    public function setScholarshipDonorName($scholarshipDonorName)
    {
        $this->scholarship_donor_name = $scholarshipDonorName;

        return $this;
    }

    /**
     * Get scholarshipDonorName
     *
     * @return string
     */
    public function getScholarshipDonorName()
    {
        return $this->scholarship_donor_name;
    }

    /**
     * Set passport
     *
     * @param string $passport
     *
     * @return Student
     */
    public function setPassport($passport)
    {
        $this->passport = $passport;

        return $this;
    }

    /**
     * Get passport
     *
     * @return string
     */
    public function getPassport()
    {
        return $this->passport;
    }

    /**
     * Set appNo
     *
     * @param string $appNo
     *
     * @return Student
     */
    public function setAppNo($appNo)
    {
        $this->app_no = $appNo;

        return $this;
    }

    /**
     * Set instName
     *
     * @param string $instName
     *
     * @return Student
     */
    public function setInstName($instName)
    {
        $this->inst_name = $instName;

        return $this;
    }

    /**
     * Get instName
     *
     * @return string
     */
    public function getInstName()
    {
        return $this->inst_name;
    }

    /**
     * Set location
     *
     * @param string $location
     *
     * @return Student
     */
    public function setLocation($location)
    {
        $this->location = $location;

        return $this;
    }

    /**
     * Get location
     *
     * @return string
     */
    public function getLocation()
    {
        return $this->location;
    }

    /**
     * Set regNo
     *
     * @param string $regNo
     *
     * @return Student
     */
    public function setRegNo($regNo)
    {
        $this->reg_no = $regNo;

        return $this;
    }

    /**
     * Get regNo
     *
     * @return string
     */
    public function getRegNo()
    {
        return $this->reg_no;
    }

    /**
     * Set dateOfGrad
     *
     * @param string $dateOfGrad
     *
     * @return Student
     */
    public function setDateOfGrad($dateOfGrad)
    {
        $this->date_of_grad = $dateOfGrad;

        return $this;
    }

    /**
     * Get dateOfGrad
     *
     * @return string
     */
    public function getDateOfGrad()
    {
        return $this->date_of_grad;
    }

    /**
     * Set qual
     *
     * @param string $qual
     *
     * @return Student
     */
    public function setQual($qual)
    {
        $this->qual = $qual;

        return $this;
    }

    /**
     * Get qual
     *
     * @return string
     */
    public function getQual()
    {
        return $this->qual;
    }

    /**
     * Set field
     *
     * @param string $field
     *
     * @return Student
     */
    public function setField($field)
    {
        $this->field = $field;

        return $this;
    }

    /**
     * Get field
     *
     * @return string
     */
    public function getField()
    {
        return $this->field;
    }
}
