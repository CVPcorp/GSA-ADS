Customer Value Partners prototype URL: https://gsa-ads.cvpcorp.com

Documentation regarding this prototype can be found in the \doc folder within the github repository (https://github.com/CVPcorp/GSA-ADS).

Our approach is founded on CVP's standard Agile Enterprise (AgEnt) processes. Upon receipt of the GSA Agile Delivery Services (ADS) Request for Quote (RFQ), CVP convened senior staff and accomplished the following:
- Assigned a single leader for the project, and gave that leader authority over all aspects.
- Established a new project within Jira, our standard tool for executing all agile projects. We documented all of the main RFQ instructions for the Full Stack Pool as "Requirements". Specific work activities were entered as User Stories or as Tasks. These were decomposed into smaller Subtasks, as appropriate. All team members used this tool to track and document progress. They added new items to the backlog, and continually added comments to tasks and subtasks as they made progress. Jira serves as the primary collaboration and documentation tool for all project activities.
- Developed an overall project schedule. Given the short overall schedule, we originally broke the project into four two-day sprints so that we could iterate on design and development activities. In addition to development tasks, each sprint had four formal process events:
    - Planning: prioritize the backlog; assign tasks; estimate work effort
	- Daily Scrums: a daily stand-up meeting for all team members to discuss: tasks completed yesterday; plans for today; impediments to progress.
	- Demo: All team members demonstrate progress on assigned tasks. The Product Manager and other team members offer suggestions for improvement. The product backlog is updated and expanded.
	- Retrospective: Review of work processes where anyone can offer suggestions for improvement

	
Sprint 1 - Team Dev & Infrastructure:

Assembling the right team: The following members were identified. Given the project's duration and scope, some of the team members were assigned more than one role:
- Gus Vazquez		Product Manager
- Doug Taphouse		Agile Coach, Business Analyst, Delivery Manager, Writer / Content Designer/Strategist
- Chris Chen		Technical Architect, Frontend Web Developer
- Jake Munta		Backend Web Developer
- Victoria Makinde	Visual Designer
- Alex Dembski		DevOps Engineer
- Pete Belli		Interaction Designer / User Researcher / Usability Tester
- Liz Nguyen		Security Engineer
- (unassigned)		Digital Performance Analyst

Immediate Sprint 1 tasks:
- Select opensource technical architecture and tools
- Set up basic infrastructure using an IaaS vendor (Amazon Web Services). Establish a github repository for configuration management.
- Designated Mr. Anirudh Kulkarni as a representative user. In collaboration with the Product Manager and Business Analyst, he reviewed the available data and defined the basic prototype functions to be delivered


Sprint 2 - Initial Design & Prototype

- Initial requirements implemented in code
- Initial page layout and navigation aspects defined, and initial styles and look & feel developed.
- Technology architecture was reviewed for security vulnerabilities
- Continuous integration was established and verified, including unit testing. All check-ins result in new build, deployed to the virtual AWS server
- Initial code and designs are demonstrated and in-depth reviews are conducted for usability and conformance to requirements. Feedback is obtained from the User community and added to the backlog.
- Initial versions of documentation (including this file) drafted.


Sprint 3 - Refine Design & Iterate Prototype

- Backlog items reviewed and prioritized. 
- Worked with Mr. Kulkarni to refine requirements and design with human-centered design techniques
- Reviewed usability on mobile devices and documented feedback
- Page layouts and styles were implemented and refined
- Defects identified and corrected.
- Selected high-priority security improvement recommendations are implemented.
- Security related to user and developer connections to the hosting infrastructure evaluated.
- Continuous monitoring of production servers was initiated 
- Documentation was refined.
- New revisions reviewed for usability, conformance to requirements, and suitability by the User community. Feedback was added to the product backlog.


Sprint 4 - Final Prototype

- The backlog was prioritized, and final tweaks included for the final prototype.
- Installation and deployment documentation was created
- Evidence documentation was finalized (Jira issues were exported and references added to the evidence spreadsheet
- The github repository was made public and will be locked down after all documentation is complete
- The prototype web site will be locked down to prevent unauthorized modification.

RFQ modifications and date extensions provided more time for refining the prototype, and we adjusted the project schedule to extend the length of Sprint 5. In addition, we spent additional time at the end of the project to implement "docker" within our AWS environment as specified in the Technical Questions and Answers (#34).



