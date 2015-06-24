Customer Value Partners (CVP)
IT-70: GS35F0227P

Prototype URL: https://gsa-ads.cvpcorp.com

All other documentation regarding this prototype and our team's processes can be found in the \doc folder within the github repository.

Our approach to the GSA's project is founded on CVP's standard Agile Enterprise (AgEnt) processes. CVP strives to conduct all projects using agile principles and methods. Upon receipt of the FSA Agile Delivery Services (ADS) request for quote (RFQ), CVP convened a small group of senior staff, assigned a single leader for the project, and gave that leader authority over all aspects. Immediate first steps:
- Establish a new project within Jira, our standard tool for tracking all agile projects. We first documented all of the main RFQ instructions in Jira as "Requirements". Specific work activities were entered as User Stories or as Tasks. In many instances the Stories or Tasks were broken out into Subtasks. All team members used this tool to track and document progress. They add new items to the backlog, and continually add comments to tasks and subtasks as they make progress. Jira serves as the primary collaboration and documentation tool for all project activities.
- Develop an overall project schedule. We broke the project into four two-day sprints so that we could properly iterate on design and development activities. In addition to development tasks, each sprint has four formal process events:
    - Planning: the backlog is prioritized; tasks are assigned; work effort is estimated
	- Daily Scrums: a short stand-up meeting is held each morning so all team members can discuss (1) tasks completed yesterday; (2) plans for today; (3) impediments to progress.
	- Demo: All team members demonstrate the results of their efforts. The Product Manager and other team members offer suggestions for improvement. New items are added to the product backlog.
	- Retrospective: The team reviews the work processes used and offer suggestions for improvement

	
Sprint 1 (ADS 1) - Team Dev & Infrastructure:

Assembling the right team was paramount. The following members were identified:
- Gus Vazquez		Product Manager
- Doug Taphouse		Agile Coach, Business Analyst, Delivery Manager
- Chris Chen		Technical Architect, Frontend Web Developer
- Jake Munta		Backend Web Developer
- Victoria Makinde	Visual Designer
- Alex Dembski		DevOps Engineer
- Pete Belli		Interaction Designer / User Researcher / Usability Tester, Writer / Content Designer/Strategist
- Liz Nguyen		Security Engineer
- (unassigned)		Digital Performance Analyst

Note that given this project's duration and limited scope, some of the team members were assigned more than one role.

We also immediately began work setting up basic infrastructure. CVP uses Amazon Web Services (AWS)for many of its projects, and to hosts core corporate service backups. Our Technical Architect and DevOps Engineer chose appropriate opensource technology components and tools and quickly set up a pair of servers: one for the prototype web site; the other to host development and test tools. We also established a new project repository on github for source code and documentation control.

Our Product Manager and Business Analyst provided an overview of the FDA datasets to a surrogate user, Anirudh Kulkarni. Mr. Kulkarni reviewed the available data and defined the basic prototype functions to be delivered.


Sprint 2 - Initial Design & Prototype

The initial requirements were implemented in code, the initial page layout and navigation aspects were defined, and initial styles and look & feel were developed. The technology architecture was reviewed for security vulnerabilities. Continuous integration was established and verified, including unit testing.

The initial code and designs are demonstrated and in-depth reviews are conducted for usability, conformance to requirements, and feedback is obtained from the User community and added to the backlog.

Initial versions of documentation (including this file) were drafted.


Sprint 3 - Refine Design & Iterate Prototype

Backlog items were reviewed and prioritized. Page layouts and styles were implemented and refined. System-level defects were identified and corrected. Selected high-priority security improvement recommendations are implemented. Security related to user and developer connections to the hosting infrastructure were evaluated. Documentation was refined.

New revisions were reviewed for usability, conformance to requirements, and suitability by the User community. Feedback was added to the product backlog.


Sprint 4 - Final Prototype

The backlog was prioritized, and final tweaks were included for the final prototype. Documentation was finalized. All evidence files from Jira were exported, loaded to githup, and references were added to the evidence spreadsheet. The github repository was made public and will be locked down after all documentation is complete. The prototype web site will also be locked down to prevent unauthorized modification.


