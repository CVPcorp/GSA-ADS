Customer Value Partners (CVP)
IT-70: GS35F0227P
dtaphouse@cvpcorp.com

Prtotype URL: https://gsa-ads.cvpcorp.com

All documentation regarding this prototype and our team's processes can be found in the \doc folder in the git repository.

Our approach to the GSA's project is founded on CVP's standard Agile Enterprise (AgEnt) processes. CVP strives to conduct all projects -- especially software development projects -- using agile principles and methods. Upon receipt of the request for quote (RFQ), CVP convened a small group of senior staff, assigned a single leader for the project, and gave that leader authority over all aspects. Immediate first steps:
- Establish a new project in Jira, our standard tool for tracking all Agile projects. We documented all of the main RFQ instructions in Jira as "Requirements". Specific team work activities were entered as user Stories (leading to specific prototype functionality) or as Tasks. In many instances the Stories or Tasks were broken out into Subtasks. All team members user this tool very actively. They add new items to the backlog, and continually add comments to tasks and subtasks as they progress. It also serves as the primary documentation point for all project activities.
- Develop an overall project schedule: We broke the project into four two-day sprints so that we could properly iterate on design and development activities. Each sprint has four formal events:
    - Planning: the backlog is prioritized; tasks are assigned; work effort is estimated
	- Daily Scrums: a short stand-up meeting is held each morning so all team members can say (1) what did they do yesterday; (2) what are they planning to do today; (3) are there any impediments to progress.
	- Demo: At the end of the sprint, all team members show off the results of their efforts. The Product Manager and other team members offer suggestions for improvement. New items are added to the product backlog.
	- Retrospective: The team reviews the work processes used and offer suggestions for improvement

	
Sprint 1 (ADS 1) - Team Dev & Infrastructure:

The most important activity in this sprint was to identify and on-board appropriately skilled and experienced team members. The team was composed of the following:
- Gus Vazquez		Product Manager
- Douglas Taphouse	Agile Coach, Business Analyst, Delivery Manager
- Chris Chen		Technical Architect, Frontend Web Developer
- Jake Munta		Backend Web Developer
- Victoria Makinde	Visual Designer
- Alex Dembski		DevOps Engineer
- Pete Belli		Interaction Designer / User Researcher / Usability Tester, Writer / Content Designer/Strategist
- Liz Nguyen		Security Engineer
- (unassigned)		Digital Performance Analyst

Note that given this short project's duration and limited scope, some of the team members were assigned more than one role.

We also immediately began work setting up basic infrastructure. CVP uses Amazon Web Services (AWS)for many of its projects, and also to hosts backups for core corporate services. Our Technical Architect and DevOps Engineer decided on an appropriate opensource technology stack and toolset and quickly set up a pair of Ubuntu servers: one for the prototype web site; the other to host development and test tools. We also established a new project repository on github for source code and documentation control.

Our Product Manager and Business Analyst provided an overview of the FDA datasets to a surrogate user, Anirudh Kulkarni. Mr. Kulkari reviewed the data available and specified the functionality he wanted the prototype to provide.


Sprint 2 - Initial Design & Prototype

The initial requirements are implemented in code, the initial page layout and navigation aspects are defined, and initial style and look & feel are developed. The technology architecture is reviewed for security vulnerabilities. Continuous integration is put in place, and unit tests are included as part of the integration process.

The initial code and designs are demonstrated and in-depth reviews are conducted for usability, conformance to requirements, and feedback is obtained from the User community and added to the backlog.

Initial versions of documentation (including this file) are drafted.


Sprint 3 - Refine Design & Iterate Prototype

Backlog items are reviewed and prioritized. Page layouts and styles are implemented and and refined. Selected high-priority security improvement recommendations are implemented. Documentation is refined.

New revisions are reviewed for usability, conformance to requirements, and for suitability by the User community. Feedback is added to the product backlog.


Sprint 4 - Final Prototype

The backlog is prioritized, and final tweaks are included for the final prototype. Documentation is finalized. The github repository is made public and locked down. The prototype web site is locked down.


