var app = angular.module('myApp', []);
app.controller('myCtrl', function($scope, $http) {
    var team = [
        // {name:'ПМ', min: 180,current: 180,max: 180, id: 0},
        // {name:'Программист 1', min: 105,current: 120,max: 130, id: 1},
        // {name:'Программист 2', min: 105,current: 120,max: 130, id: 2},
        // {name:'Тестировщик', min: 60,current: 70,max: 80, id: 3}
    ];

    var processes = [
        // {name: 'Process 1', team: [
        //     {name: "Пм", min: 4, current: 5, max: 5, id: 0},
        //     {name: "Программист 1", min: 4, current: 4, max: 5, id: 1},
        //     {name: "Программист 2", min: 4, current: 4, max: 5, id: 2},
        //     {name: "Тестировщик", min: 4, current: 4, max: 5, id: 3}
        // ]},
        // {name: 'Process 2', team: [
        //     {name: "Пм", min: 8, current: 11, max: 12, id: 0},
        //     {name: "Программист 1", min: 8, current: 11, max: 12, id: 1},
        //     {name: "Программист 2", min: 8, current: 11, max: 12, id: 2},
        //     {name: "Тестировщик", min: 8, current: 11, max: 12, id: 3}
        // ]}
    ];

    var risks = [
        // {
        //     name: 'Risk 1',
        //     type: [
        //         {
        //             name: 'probability_occurrence',
        //             value:[
        //                 {
        //                     min: 0.3, current: 0.4, max: 0.4
        //                 }]
        //
        //         } ,
        //         {
        //             name: 'consequences_manifestation',
        //             value:[
        //                 {
        //                     min: 5, current: 5, max: 6
        //                 }]
        //
        //         }
        //     ]
        // },
        // {
        // name: 'Risk 2',
        //     type: [
        //         {
        //             name: 'probability_occurrence',
        //             value:[
        //                 {
        //                     min: 0.2, current: 0.3, max: 0.4
        //                 }]
        //         } ,
        //         {
        //             name: 'consequences_manifestation', value:
        //             [{
        //                 min: 3, current: 3, max: 4
        //             }]
        //
        //         }
        //     ]
        // },
    ];

    $scope.currentProcess = '';


    $scope.addProjectId = function(project_id) {
        $scope.project_id = project_id;
    };

    $scope.addMethodologyId = function(methodology_id) {
        // console.log($scope.processes);
        var req = {
            method: 'GET',
            url: '../../synthesis/get-all-method'
        }

        $http(req).then(function(response) {
                if(response.data.methods){
                    $scope.methods = response.data.methods;
                    $scope.methods.push({id : 0, name : "Не выбранно"});
                    if(methodology_id == undefined){
                        methodology_id = $scope.methods.length;
                    }
                    $scope.method_selected = $scope.methods[methodology_id - 1];
                }
            },
            function(response) { // optional
                // failed
            });

        if(methodology_id){
            var req = {
                method: 'POST',
                url: '../../synthesis/get-process',
                data: {
                    methodology_id: methodology_id,
                }
            }

            $http(req).then(
                function(response) {

                    if(response.data.process){
                        $scope.processes = angular.copy(response.data.process);
                    }

                    // console.log($scope.processes);

                },
                function(response) { // optional
                    // failed
                });
        }
    };


    $scope.updateMethodologies = function() {
        // $scope.project_id = project_id;
        console.log(123);
    };
    $scope.addProjectId = function(project_id) {
        $scope.project_id = project_id;
    };

    $scope.removeFirst = function() {
        $scope.team.shift();
    };

    $scope.updateAge = function() {
        $scope.team.forEach(function(el) {
            el.age = el.age + 5;
        });
    };

    $scope.copy = function() {
        $scope.team = angular.copy($scope.team);
    };

    $scope.reset = function() {
        $scope.team = angular.copy(team);
        $scope.processes = angular.copy(processes);
        $scope.risks = angular.copy(risks);
    };

    $scope.addPerson = function() {
        $scope.team.push({name:$scope.new_person_name, id: $scope.team.length});
        $scope.new_person_name = "";
    };

    $scope.removePerson = function(item) {
        var index = $scope.team.indexOf(item);
        $scope.team.splice(index, 1);
    };

    $scope.addProcess = function() {
        $scope.processes.push({name:$scope.new_process_name,team:[],id: $scope.processes.length});
        $scope.new_process_name = "";
    };

    $scope.addCurrentProcess = function(process) {
        $scope.currentProcess = process;
    };

    $scope.addPersonToProcess = function(person) {
        $scope.processes[$scope.currentProcess].team.push({name:person.name,id:person.id});
    };

    $scope.removeProcess = function(item) {
        $scope.processes.splice(item, 1);
    };

    $scope.removeProcessPerson = function(item,item_person) {
        $scope.processes[item].team.splice(item_person, 1);
    };

    $scope.addRisk = function() {
        $scope.risks.push({
            name:$scope.new_risk_name,
            type:[{
                name: 'probability_occurrence',
                value: [{
                    min: '', current: '', max: ''
                }]
            },{
                name: 'consequences_manifestation',
                value: [{
                    min: '', current: '', max: ''
                }]
            }],
            id: $scope.risks.length
        });
        $scope.new_risk_name = "";
    };

    $scope.removeRisk = function(item) {
        $scope.risks.splice(item, 1);
    };

    $scope.calculate = function() {
        // console.log($scope.project_id);
        var req = {
            method: 'POST',
            url: '../../synthesis/add-combination',
            data: {
                processes: $scope.processes,
                team: $scope.team,
                risks: $scope.risks,
                project_id: $scope.project_id,
                title: $scope.title,
            }
        }

        $http(req).then(function(response) {
                if(response.data.combination.project_id){
                    window.location.replace("../../synthesis/process-of-project/"+response.data.combination.project_id);
                }
            },
            function(response) { // optional
                // failed
        });


    };

    $scope.updateMethod = function() {
        var methodology_id = $scope.method_selected.id;
        if(methodology_id){
            var req = {
                method: 'POST',
                url: '../../synthesis/get-process',
                data: {
                    methodology_id: methodology_id,
                }
            }
            $scope.processes = [];
            $http(req).then(
                function(response) {
                    if(response.data.process){

                        $scope.processes = angular.copy(response.data.process);
                    }
                },
                function(response) { // optional
                    // failed
                });
        }
    };


    $scope.reset();
});